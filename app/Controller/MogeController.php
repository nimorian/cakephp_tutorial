<?php
/**
 * /app/Controller/MogeController.php
 */
class MogeController extends AppController
{
    /** ビュー未使用 */
    public $autoRender = false;
    
    /**
     * indexアクション
     */
    public function index() {
        echo "Hello World!";
    }
}
?>
