<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Controllers\Controller;
use App\Models\Domain;

class DomainController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(): Response
    {
        // CODE CHALLENGE: Search Filter
        $domains = Domain::all();
        // Create HTTP response, 200 ok.
        $response = new Response($domains, Response::HTTP_OK);
        // Return HTTP response.
        return $response;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request): Response
    {
        // CODE CHALLENGE: Add Domains
        $request->validate([
            'domain_name' => 'required|max:255',
        ]);

        $newDomain = new Domain([
            'domain_name' => $request->get('domain_name'),
        ]);

        $newDomain->save();
        $response = new Response($newDomain, Response::HTTP_OK);

        return $response;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id): Response
    {
        // CODE CHALLENGE: Toggle Imprint
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(int $id): Response
    {
        // CODE CHALLENGE: Delete Domains
        Domain::destroy($id);
        $response = new Response(Response::HTTP_OK);
        // Return HTTP response.
        return $response;
    }
}
