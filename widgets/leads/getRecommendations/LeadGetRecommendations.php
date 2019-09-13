<?php

namespace frontend\themes\medical\widgets\leads\getRecommendations;

use pantera\leads\models\Lead;

class LeadGetRecommendations extends Lead
{
    public $name;
    public $phone;
    public $city;

    public function rules()
    {
        $rules = parent::rules();
        $rules[] = ['name', 'required'];
        $rules[] = ['phone', 'required'];
        $rules[] = ['city', 'required'];
        return $rules;
    }

    public function attributeLabels()
    {
        $labels = parent::attributeLabels();
        $labels['name'] = 'Имя';
        $labels['phone'] = 'Номер телефона';
        $labels['city'] = 'Город';
        return $labels;
    }
}
