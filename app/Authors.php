<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Authors extends Model
{
    /**
     * The attribute that are mass assignable
     */
    protected $fillable = [
        'name_authors', 'email_authors', 'github_authors', 'twitter_authors', 'location_authors', 'latest_article_published'
    ];

    /**
     * The attributes excluded from the model's JSON form
     */
    protected $hidden = [];
}
