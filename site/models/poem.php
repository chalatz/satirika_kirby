<?php

class PoemPage extends Page {

    public function get_category_url($cat) {

        $categories = array(
            'Σατιρικά' => 'satirika',
            'Λυρικά' => 'lirika',
        );

        return url('poems?category=' . $categories[$cat]);

    }

}
