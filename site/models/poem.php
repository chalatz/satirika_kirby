<?php

class PoemPage extends Page {

    public function get_category_url($cat) {

        $categories = array(
            'Πολιτική Σάτιρα' => 'politiki-satira',
            'Κοινωνική Σάτιρα' => 'koinoniki-satira',
            'Ερωτική Σάτιρα' => 'erotiki-satira',
            'Φιλοσοφική Σάτιρα' => 'filosofiki-satira',
            'Λυρικά' => 'lirika',
            'Φιλοσοφικά' => 'filosofika',
        );

        return url('poems?category=' . $categories[$cat]);

    }

}
