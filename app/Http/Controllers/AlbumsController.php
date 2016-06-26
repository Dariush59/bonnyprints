<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateAlbumRequest;
use App\Model\Album;
class AlbumsController extends Controller
{
    /**
     * @param CreateAlbumRequest $request
     * @return array
     */
    function getImages(CreateAlbumRequest $request){
         return Album::createAlbum($request->except('_token'));
  }
}
