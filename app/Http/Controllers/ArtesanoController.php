<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateArtesanoRequest;
use App\Http\Requests\UpdateArtesanoRequest;
use App\Http\Controllers\AppBaseController;
use App\Models\Artesano;
use Illuminate\Http\Request;
use Flash;
use Response;

class ArtesanoController extends AppBaseController
{
    /**
     * Display a listing of the Artesano.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        /** @var Artesano $artesanos */
        $artesanos = Artesano::all();

        return view('artesanos.index')
            ->with('artesanos', $artesanos);
    }

    /**
     * Show the form for creating a new Artesano.
     *
     * @return Response
     */
    public function create()
    {
        return view('artesanos.create');
    }

    /**
     * Store a newly created Artesano in storage.
     *
     * @param CreateArtesanoRequest $request
     *
     * @return Response
     */
    public function store(CreateArtesanoRequest $request)
    {
        $input = $request->all();

        /** @var Artesano $artesano */
        $artesano = Artesano::create($input);

        Flash::success('Artesano saved successfully.');

        return redirect(route('artesanos.index'));
    }

    /**
     * Display the specified Artesano.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        /** @var Artesano $artesano */
        $artesano = Artesano::find($id);

        if (empty($artesano)) {
            Flash::error('Artesano not found');

            return redirect(route('artesanos.index'));
        }

        return view('artesanos.show')->with('artesano', $artesano);
    }

    /**
     * Show the form for editing the specified Artesano.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        /** @var Artesano $artesano */
        $artesano = Artesano::find($id);

        if (empty($artesano)) {
            Flash::error('Artesano not found');

            return redirect(route('artesanos.index'));
        }

        return view('artesanos.edit')->with('artesano', $artesano);
    }

    /**
     * Update the specified Artesano in storage.
     *
     * @param int $id
     * @param UpdateArtesanoRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateArtesanoRequest $request)
    {
        /** @var Artesano $artesano */
        $artesano = Artesano::find($id);

        if (empty($artesano)) {
            Flash::error('Artesano not found');

            return redirect(route('artesanos.index'));
        }

        $artesano->fill($request->all());
        $artesano->save();

        Flash::success('Artesano updated successfully.');

        return redirect(route('artesanos.index'));
    }

    /**
     * Remove the specified Artesano from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        /** @var Artesano $artesano */
        $artesano = Artesano::find($id);

        if (empty($artesano)) {
            Flash::error('Artesano not found');

            return redirect(route('artesanos.index'));
        }

        $artesano->delete();

        Flash::success('Artesano deleted successfully.');

        return redirect(route('artesanos.index'));
    }
}
