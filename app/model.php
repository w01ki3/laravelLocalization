<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pages extends Model
{
    protected $table = "pages";
    protected $fillable = [
        'tr_sysName',
        'en_sysName', 
        'tr_content', 
        'en_content', 
        'slug',        
        'active'
    ];
    
    public function sysName($lang)
    {
        $colName = $lang.'_sysName';
        return $this->$colName;
    }

    public function content($lang)
    {
        $colName = $lang.'_content';
        return $this->$colName;
    }

}
