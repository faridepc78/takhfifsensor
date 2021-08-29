<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Http\Requests\Site\ContactUs\ContactUsRequest;
use App\Repositories\BannerRepository;
use App\Repositories\BrandRepository;
use App\Repositories\ContactUsRepository;
use App\Repositories\SliderRepository;
use Exception;

class MainController extends Controller
{
    private $sliderRepository;
    private $brandRepository;
    private $bannerRepository;
    private $contactUsRepository;

    public function __construct(SliderRepository $sliderRepository,
                                BrandRepository $brandRepository,
                                BannerRepository $bannerRepository,
                                ContactUsRepository $contactUsRepository)
    {
        $this->sliderRepository = $sliderRepository;
        $this->brandRepository = $brandRepository;
        $this->bannerRepository = $bannerRepository;
        $this->contactUsRepository = $contactUsRepository;
    }

    public function home()
    {
        $sliders = $this->sliderRepository->getAll();
        $brands = $this->brandRepository->getAll();
        $banners = $this->bannerRepository->getAll();
        return view('site.home.index', compact('sliders', 'brands', 'banners'));
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
}
