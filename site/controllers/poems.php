<?php

return function($site, $pages, $page) {

    $poems = $page->children()->sortBy('date', 'desc', 'time', 'desc')->paginate($site->pageNum()->int());

    $title = $page->title();

    if(get('category')){

        $category =  get('category');

        if($category == 'politiki-satira') {
            $poems = $page->children()
                ->sortBy('date', 'desc', 'time', 'desc')
                ->filterBy('tags', 'Πολιτική Σάτιρα')
                ->paginate($site->pageNum()->int());

            $title = 'Πολιτική Σάτιρα';
        }

        if($category == 'koinoniki-satira') {
            $poems = $page->children()
                ->sortBy('date', 'desc', 'time', 'desc')
                ->filterBy('tags', 'Κοινωνική Σάτιρα')
                ->paginate($site->pageNum()->int());

            $title = 'Κοινωνική Σάτιρα';
        }

        if($category == 'erotiki-satira') {
            $poems = $page->children()
                ->sortBy('date', 'desc', 'time', 'desc')
                ->filterBy('tags', 'Ερωτική Σάτιρα')
                ->paginate($site->pageNum()->int());

            $title = 'Ερωτική Σάτιρα';
        }

        if($category == 'lirika') {
            $poems = $page->children()
                ->sortBy('date', 'desc', 'time', 'desc')
                ->filterBy('tags', 'Λυρικά')
                ->paginate($site->pageNum()->int());

            $title = 'Λυρικά';
        }

        if($category == 'filosofika') {
            $poems = $page->children()
                ->sortBy('date', 'desc', 'time', 'desc')
                ->filterBy('tags', 'Φιλοσοφικά')
                ->paginate($site->pageNum()->int());

            $title = 'Φιλοσοφικά';
        }

    }

    $pagination = $poems->pagination();

    return compact('poems', 'pagination', 'title');

};
