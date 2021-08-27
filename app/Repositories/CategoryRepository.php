<?php

namespace App\Repositories;

use App\Models\Category;

class CategoryRepository
{
    public function store($values)
    {
        return Category::query()
            ->create([
                'name' => $values['name'],
                'slug' => $values['slug'],
                'parent_id' => $values['parent_id'],
                'level' => $values['level']
            ]);
    }

    public function paginate()
    {
        return Category::query()
            ->where('parent_id', '=', null)
            ->latest()
            ->paginate(10);
    }

    public function findById($id)
    {
        return Category::query()
            ->findOrFail($id);
    }

    public function findByParentId($parent_id)
    {
        return Category::query()
            ->findOrFail($parent_id);
    }

    public function update($values, $id)
    {
        return Category::query()
            ->where('id', '=', $id)
            ->update([
                'name' => $values['name'],
                'slug' => $values['slug'],
                'parent_id' => $values['parent_id'],
                'level' => $values['level']
            ]);
    }

    public function getParents()
    {
        return Category::query()
            ->where('parent_id', '=', null)
            ->latest()
            ->get();
    }

    public function getSubs($id)
    {
        return Category::query()
            ->where('parent_id', '=', $id)
            ->latest()
            ->paginate(10);
    }

    public function setLevel($parent_id)
    {
        if ($parent_id !== null) {
            $parent_level = $this->findByParentId($parent_id)['level'];

            if ($parent_level == 1) {
                return 2;
            } elseif ($parent_level == 2) {
                return 3;
            }
        } else {
            return 1;
        }
    }
}
