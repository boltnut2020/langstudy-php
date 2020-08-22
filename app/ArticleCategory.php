<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ArticleCategory extends Model
{
    //
    public function bulkUpdate($articleId, $categories) {
        
        $this->where('article_id', $articleId)->delete();
        $data = [];
        foreach($categories as $c) {
            $item = [];
            $item['article_id'] = $articleId;
            $item['category_id'] = $c;
            $data[] = $item;
        }
        $this->insert($data);
    }
}
