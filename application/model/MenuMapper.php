<?php

class MenuMapper
{

    public function getMenuItems()
    {
        $menuitems = array(
            array(
                'link' => 'home',
                'description' => 'home',
            ),
           
            array(
                'link' => 'player',
                'description' => 'players',
            ),
            array(
                'link' => 'category',
                'description' => 'categories',
            ),
        );

        return $menuitems;
    }
}