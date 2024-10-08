<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PDFManager extends Controller
{
    /**
     *  @OA\Get(
     *      path="/pdf",
     *      operationId="getPDFsList",
     *      tags={"PDFs"},
     *      summary="Get list of PDFs",
     *      description="Returns list of PDFs",
     *      @OA\Response(
     *          response=200,
     *          description="successful operation"
     *      )
     *  )
     *
     * Returns list of PDFs
     */
    public function get() {
        return response()->json([
            'message' => 'Hello World',
        ]);
    }
}
