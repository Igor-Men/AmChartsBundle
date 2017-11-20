<?php
/**
 * Created by PhpStorm.
 * User: lothar
 * Date: 20.11.17
 * Time: 11:10
 */

namespace IK\AmChartsBundle\Helpers;


interface CommentDataInterface
{
    public function getWarnings();
    public function getErrors();
    public function getMessages();
}