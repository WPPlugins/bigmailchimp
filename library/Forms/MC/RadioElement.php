<?php

/**
 * Description of MCRadioElement
 *
 * @author Arian Khosravi <arian@bigemployee.com>, <@ArianKhosravi>
 */
class Forms_MC_RadioElement extends Forms_ElementsAbstract {

    public function toString() {
        $values = $this->get_value();
        $str = '';
        $str .= ($this->get_before() ? $this->get_before() : '');
        $str .= ($this->get_label() ? '<label>' .
                        $this->get_label() . '</label>' : '');
        $str .= '<fieldset>';
        $str .= '<ul>';
        foreach ($values as $index => $value) {
            $str .= '<li>';
            $str .= '<input type="' . $this->get_type() . '" ' .
                    ($this->get_id() ? 'id="' . $this->get_id() . '-' . $index . '" ' : '') .
                    ($this->get_name() ? 'name="' . $this->get_name() . '" ' : '') .
                    ($this->get_value() ? 'value="' . $value . '" ' : '') .
                    (is_array($this->get_attributes()) ?
                            implode(' ', $this->get_attributes()) : '');
            $str .= '/>';
            $str .= '<label for="' . $this->get_id() . '-' . $index . '">' . $value . '</label>';
            $str .= '</li>';
        }
        $str .= '</ul>';
        $str .= '</fieldset>';
        $str .= ($this->get_after() ? $this->get_after() : '');
        return $str;
    }

}