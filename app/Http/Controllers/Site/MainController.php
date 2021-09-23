<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Http\Requests\Site\ContactUs\ContactUsRequest;
use App\Http\Requests\Site\Order\OrderRequest;
use App\Notifications\RegisterOrder;
use App\Repositories\BannerRepository;
use App\Repositories\BrandRepository;
use App\Repositories\CategoryRepository;
use App\Repositories\CityRepository;
use App\Repositories\ContactUsRepository;
use App\Repositories\OrderRepository;
use App\Repositories\ProductRepository;
use App\Repositories\ProvinceRepository;
use App\Repositories\SliderRepository;
use App\Services\BasketBuy\BasketBuyService;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class MainController extends Controller
{
    private $sliderRepository;
    private $brandRepository;
    private $bannerRepository;
    private $contactUsRepository;
    private $productRepository;
    private $categoryRepository;
    private $provinceRepository;
    private $cityRepository;
    private $orderRepository;
    private $basketBuyService;

    public function __construct(SliderRepository $sliderRepository,
                                BrandRepository $brandRepository,
                                BannerRepository $bannerRepository,
                                ContactUsRepository $contactUsRepository,
                                ProductRepository $productRepository,
                                CategoryRepository $categoryRepository,
                                ProvinceRepository $provinceRepository,
                                CityRepository $cityRepository,
                                OrderRepository $orderRepository,
                                BasketBuyService $basketBuyService)
    {
        $this->sliderRepository = $sliderRepository;
        $this->brandRepository = $brandRepository;
        $this->bannerRepository = $bannerRepository;
        $this->contactUsRepository = $contactUsRepository;
        $this->productRepository = $productRepository;
        $this->categoryRepository = $categoryRepository;
        $this->provinceRepository = $provinceRepository;
        $this->cityRepository = $cityRepository;
        $this->orderRepository = $orderRepository;
        $this->basketBuyService = $basketBuyService;
    }

    public function home()
    {
        $sliders = $this->sliderRepository->getAll();
        $brands = $this->brandRepository->getAll();
        $banners = $this->bannerRepository->getAll();
        $new_products = $this->productRepository->new(14);
        $mostSales_products = $this->productRepository->mostSales();
        $show_categories = $this->categoryRepository->getShow();
        return view('site.home.index',
            compact('sliders', 'brands',
                'banners', 'new_products', 'mostSales_products', 'show_categories'));
    }

    public function about_us()
    {
        return view('site.about-us.index');
    }

    public function contact_us()
    {
        return view('site.contact-us.index');
    }

    public function contact_us_post(ContactUsRequest $request)
    {
        try {
            $this->contactUsRepository->store($request);
            newFeedback('پیام', 'پیام شما با موفقیت ارسال شد', 'success');
        } catch (Exception $exception) {
            newFeedback('پیام', 'عملیات با شکست مواجه شد', 'error');
        }
        return redirect()->route('contact-us');
    }

    public function faq()
    {
        return view('site.faq.index');
    }

    public function terms_and_conditions()
    {
        return view('site.terms-and-conditions.index');
    }

    public function checkout()
    {
        $count_data = $this->basketBuyService::countItems();
        if ($count_data >= 1) {
            $provinces = $this->provinceRepository->getAll();
            return view('site.checkout.index', compact('provinces'));
        } else {
            newFeedback('پیام', 'شما اجازه دسترسی به این صفحه را ندارید', 'error');
            return redirect()->route('home');
        }
    }

    public function getCities(Request $request)
    {
        try {
            $province_id = $request->get('province_id');
            $cities = $this->cityRepository->findByProvinceId($province_id);
            return response()->json(['cities' => $cities, 'status' => 'success'], Response::HTTP_OK);
        } catch (Exception $exception) {
            return response()->json(['message' => 'عملیات با شکست مواجه شد'], Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

    public function checkout_post(OrderRequest $request)
    {
        try {
            DB::transaction(function () use ($request) {
                $order = $this->orderRepository->storeOrder($request);

                $data = $this->basketBuyService::readData();

                foreach ($data as $datum) {
                    foreach ($datum as $value) {
                        $array = [
                            'product_id' => $value['id'],
                            'price' => $value['price'],
                            'count' => $value['count']
                        ];
                        $this->orderRepository->storeOrderItem($order['id'], $array);
                    }
                }

                Auth::user()->notify(new RegisterOrder(Auth::user()->fullName, $order['code']));

                $this->basketBuyService::deleteData();
            });
            DB::commit();
            newFeedback('پیام', 'سفارش شما ثبت شد لطفا برای پرداخت نهایی منتظر تایید مدیریت باشید', 'success');
        } catch (Exception $exception) {
            DB::rollBack();
            newFeedback('پیام', 'عملیات با شکست مواجه شد', 'error');
        }
        return redirect()->route('home');
    }
}
