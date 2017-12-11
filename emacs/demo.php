<?php

namespace App\Jobs;

use App\User;
use Illuminate\Contracts\Mail\Mailer;
use Illuminate\Contracts\Bus\SelfHandling;

class PurchasePodcast implements SelfHandling{
    /**
     * 邮件实现
     */
    protected $mailer;

    /**
     * 创建一个新的实例
     *
     * @param  Mailer  $mailer
     * @return void
     */
    public function __construct(Mailer $mailer)
    {
        $this->mailer = $mailer;
    }

    /**
     * 购买一个播客
     *
     * @return void
     */
    public function handle()
    {
        //    
    }
}