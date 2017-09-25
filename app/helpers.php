<?php 

function flash($message='', $type='info') 
{
    session()->flash('flash_message', $message);
    session()->flash('flash_message_type', $type);
}
