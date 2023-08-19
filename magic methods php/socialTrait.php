<?php
trait sharebleTrait
{
    public function share(){
    echo self::class." shared with Id".$this->id.PHP_EOL;
    }
}
class post
{
    public $id = 1;
    use sharebleTrait;

}

class photo
{
    public $id = 1;
    use sharebleTrait;
}

class comment
{
    public $id = 1;
    use sharebleTrait;
}

$post = new post();
$photo = new photo();
$comment = new comment();

$post->share();
$photo->share();
$comment->share();