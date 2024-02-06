<?php
class View_Product
{
    public function __construct()
    {
    }

    public function createForm()
    {
        $form = '<form action="" method="POST">';
        $form .= '<div>';
        $form .= $this->createTextField('pdata[product_name]', "Product Name: ");
        $form .= '</div>';
        $form .= '<div>';
        $form .= $this->createTextField('pdata[sku]', "Sku: ");
        $form .= '</div>';

        $form .= '<div>';
        $form .= '<span> Type: </span>';
        $form .= '<label><input type="radio" name="pdata[product_type]" value="simple"> Simple</label>';
        $form .= '<label><input type="radio" name="pdata[product_type]" value="bundle"> Bundle</label>';
        $form .= '</div>';

        $form .= '<div>';
        $form .= '<span> Category: </span>';
        $form .= '<select name="pdata[category]">';
        $form .= '<option value="bar_game_room">Bar & Game Room</option>';
        $form .= '<option value="bedroom">Bedroom</option>';
        $form .= '<option value="decor">Decor</option>';
        $form .= '<option value="dining_kitchen">Dining & Kitchen</option>';
        $form .= '<option value="living_room">Living Room</option>';
        $form .= '<option value="mattresses">Mattresses</option>';
        $form .= '<option value="office">Office</option>';
        $form .= '<option value="outdoor">Outdoor</option>';
        $form .= '</select>';
        $form .= '</div>';

        
        $form .= '<div>';
        $form .= $this->createTextField('pdata[price]', "Price: ");
        $form .= '</div>';
        $form .= '<div>';
        $form .= $this->createTextField('pdata[manufacturer_cost]', "Manufacture_Cost: ");
        $form .= '</div>';
        $form .= '<div>';
        $form .= $this->createTextField('pdata[shipping_cost]', "Shipping_Cost: ");
        $form .= '</div>';
        $form .= '<div>';
        $form .= $this->createTextField('pdata[Total_Cost]', "Total_Cost: ");
        $form .= '</div>';

        $form .= '<div>';
        $form .= '<span>Status: </span>';
        $form .= '<select name="pdata[status]"" id="">';
        $form .= '<option value="enabled">Enabled</option>';
        $form .= '<option value="disabled">Disabled</option>';
        $form .= '</select>';
        $form .= '</div>';
        
        $form .= '<div>';
        $form .= '<label for="created_at">Created At: </label>';
        $form .= '<input type="date" name="pdata[created_at]" id="created_at">';
        $form .= '</div>';

        $form .= '<div>';
        $form .= '<label for="updated_at">Updated At: </label>';
        $form .= '<input type="date" name="pdata[updated_at]" id="updated_at">';
        $form .= '</div>';

        $form .= '<div>';
        $form .= $this->createSubmitBtn('Submit');
        $form .= '</div>';
        $form .= '</form>';
        return $form;
    }
    
    public function createTextField($name, $title, $value = '', $id = '')
    {
        return '<span> ' . $title . ' </span><input id="' . $id . '" type="text" name="' . $name . '" value="' . $value . '">';
    }
    
    public function createSubmitBtn($title)
    {
        return '<input type="submit" name="submit" value="' . $title . '">';
    }

    public function toHtml()
    {
        return $this->createForm();
    }

}
