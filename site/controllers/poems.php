<?php

return function($site, $pages, $page) {

    $poems = $page->children()->sortBy('date', 'desc', 'time', 'desc')->paginate($site->pageNum()->int());

    $title = $page->title();

    if(get('category')){

        $category =  get('category');

        if($category == 'satirika') {

            $poems = $page->children()
                ->sortBy('date', 'desc', 'time', 'desc')
                ->filterBy('tags', 'Σατιρικά')
                ->paginate($site->pageNum()->int());

            $title = 'Σατιρικά ' . $title;

        }

        if($category == 'lirika') {

            $poems = $page->children()
                ->sortBy('date', 'desc', 'time', 'desc')
                ->filterBy('tags', 'Λυρικά')
                ->paginate($site->pageNum()->int());

            $title = 'Λυρικά ' . $title;

        }
    }

    $pagination = $poems->pagination();

    return compact('poems', 'pagination', 'title');

};
