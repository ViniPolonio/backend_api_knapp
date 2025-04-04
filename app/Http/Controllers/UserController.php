<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index () 
    {
        try {
            return User::consultAllUsers();

        }  catch (\Exception $e) {
            return response()->json([
                'message' => 'Error in operation',
                'error' => $e->getMessage()
            ], 500);
        }
    }

    public function show($id) 
    {
        try {
            return User::consultDetailUser($id);

        } catch (\Exception $e) {
            return response()->json([
                'message' => 'Error in operation',
                'error' => $e->getMessage()
            ], 500);
        }
    }

    public function store() 
    {
        try {
            //Criar formRequest -> Validate
            return User::createUser();

        } catch (\Exception $e) {
            return response()->json([
                'message' => 'Error in operation',
                'error' => $e->getMessage()
            ], 500);
        }
    }

    public function update () 
    {   
        try {
            //Criar formRequest -> Validate
            return User::updateUser();

        } catch (\Exception $e) {
            return response()->json([
                'message' => 'Error in operation',
                'error' => $e->getMessage()
            ], 500);
        }
    }


    public function activeUser ($idUser) 
    {
        try {
            return User::activeUser($idUser);

        } catch (\Exception $e) {
            return response()->json([
                'message' => 'Error in operation',
                'error' => $e->getMessage()
            ], 500);
        }
    }
    
    public function inactiveUser ($idUser) 
    {
        try {
            return User::inactiveUser($idUser);

        } catch (\Exception $e) {
            return response()->json([
                'message' => 'Error in operation',
                'error' => $e->getMessage()
            ], 500);
        }
    }

    //Essa função será responsável por deletar usuário. 
    //Função que vai inativar usuário de tal branch ou company será feito dentro da controller da mesma 
    public function destroy($uuid) 
    {
        try {
            return User::deleteUser($uuid);

        } catch (\Exception $e) {
            return response()->json([
                'message' => 'Error in operation',
                'error' => $e->getMessage()
            ], 500);
        }
    }
}
