<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateAlumnosRequest;
use App\Http\Requests\UpdateAlumnosRequest;
use App\Repositories\AlumnosRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class AlumnosController extends AppBaseController
{
    /** @var  AlumnosRepository */
    private $alumnosRepository;

    public function __construct(AlumnosRepository $alumnosRepo)
    {
        $this->alumnosRepository = $alumnosRepo;
    }

    /**
     * Display a listing of the Alumnos.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->alumnosRepository->pushCriteria(new RequestCriteria($request));
        $alumnos = $this->alumnosRepository->all();

        return view('alumnos.index')
            ->with('alumnos', $alumnos);
    }

    /**
     * Show the form for creating a new Alumnos.
     *
     * @return Response
     */
    public function create()
    {
        return view('alumnos.create');
    }

    /**
     * Store a newly created Alumnos in storage.
     *
     * @param CreateAlumnosRequest $request
     *
     * @return Response
     */
    public function store(CreateAlumnosRequest $request)
    {
        $input = $request->all();

        $alumnos = $this->alumnosRepository->create($input);

        Flash::success('Alumnos saved successfully.');

        return redirect(route('alumnos.index'));
    }

    /**
     * Display the specified Alumnos.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $alumnos = $this->alumnosRepository->findWithoutFail($id);

        if (empty($alumnos)) {
            Flash::error('Alumnos not found');

            return redirect(route('alumnos.index'));
        }

        return view('alumnos.show')->with('alumnos', $alumnos);
    }

    /**
     * Show the form for editing the specified Alumnos.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $alumnos = $this->alumnosRepository->findWithoutFail($id);

        if (empty($alumnos)) {
            Flash::error('Alumnos not found');

            return redirect(route('alumnos.index'));
        }

        return view('alumnos.edit')->with('alumnos', $alumnos);
    }

    /**
     * Update the specified Alumnos in storage.
     *
     * @param  int              $id
     * @param UpdateAlumnosRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateAlumnosRequest $request)
    {
        $alumnos = $this->alumnosRepository->findWithoutFail($id);

        if (empty($alumnos)) {
            Flash::error('Alumnos not found');

            return redirect(route('alumnos.index'));
        }

        $alumnos = $this->alumnosRepository->update($request->all(), $id);

        Flash::success('Alumnos updated successfully.');

        return redirect(route('alumnos.index'));
    }

    /**
     * Remove the specified Alumnos from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $alumnos = $this->alumnosRepository->findWithoutFail($id);

        if (empty($alumnos)) {
            Flash::error('Alumnos not found');

            return redirect(route('alumnos.index'));
        }

        $this->alumnosRepository->delete($id);

        Flash::success('Alumnos deleted successfully.');

        return redirect(route('alumnos.index'));
    }
}
