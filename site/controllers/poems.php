<?php

return function($site, $pages, $page) {

    $pages_num = 2;

    $poems = $page->children()->sortBy('date', 'desc', 'time', 'desc')->paginate($pages_num);

    $title = $page->title();

    if(get('category')){

        $category =  get('category');

        if($category == 'satirika') {

            $poems = $page->children()
                ->sortBy('date', 'desc', 'time', 'desc')
                ->filterBy('tags', 'Σατιρικά')
                ->paginate($pages_num);

            $title = 'Σατιρικά ' . $title;

        }

        if($category == 'lirika') {

            $poems = $page->children()
                ->sortBy('date', 'desc', 'time', 'desc')
                ->filterBy('tags', 'Λυρικά')
                ->paginate($pages_num);

            $title = 'Λυρικά ' . $title;
            
        }
    }

    $pagination = $poems->pagination();

    return compact('poems', 'pagination', 'title');

};
