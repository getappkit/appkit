<?php

namespace App\Controllers;

use App\Http\Response;
use Psr\Http\Message\ServerRequestInterface;

class PhotoController
{
    /**
     * Route: GET /photos
     * @return Response
     */
    public function index(): Response
    {
        return Response::json(['message' => 'index']);
    }

    /**
     * Route: GET /photos/create
     * @param ServerRequestInterface $request
     * @return Response
     */
    public function create(ServerRequestInterface $request): Response
    {
        return Response::json(['message' => 'create']);
    }

    /**
     * Route: POST /photos
     * @param ServerRequestInterface $request
     * @return Response
     */
    public function store(ServerRequestInterface $request): Response
    {
        $jsonArray = $request->getJson();

        return Response::redirect('/photos');
    }

    /**
     * Route: GET /photos/{id}
     * @param $id
     * @return Response
     */
    public function show($id): Response
    {
        return Response::json(['id' => $id]);
    }

    /**
     * Route: GET /photos/{id}/edit
     * @param $id
     * @return Response
     */
    public function edit($id): Response
    {
        return Response::json(['id' => $id]);
    }

    /**
     * Route: PUT /photos/{id}
     * @param $id
     * @return Response
     */
    public function update($id): Response
    {
        return Response::json(['id' => $id]);
    }

    /**
     * Route: DELETE /photos/{id}
     * @param $id
     * @return Response
     */
    public function destroy($id): Response
    {
        return Response::json(['id' => $id]);
    }
}
