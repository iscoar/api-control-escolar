<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
    public function register(Request $request) {

        // Recoger los datos del usuario por post
        $json = $request->input('json', null);
        $params = json_decode($json, true);

        if(!empty($params)) {
            // Limpiar datos
            $params = array_map('trim', $params);
    
            // Validar datos
            $validate = \Validator::make($params, [
                'id'                => 'required|alpha_num',
                'name'              => 'required|alpha',
                'last_name'         => 'required|alpha',
                'second_last_name'  => 'required|alpha',
                'gender'            => 'required|alpha',
                'password'          => 'required'
            ]);
    
            if($validate->fails()) {
                $data = array(
                    'status'    => 'error',
                    'code'      => 404,
                    'message'   => 'El usuario no se ha creado',
                    'errors'    => $validate->errors()
                );
    
            } else {

                // Crear el usuario
                $user = new User();
                $user->id               = $params['id'];
                $user->name             = $params['name'];
                $user->last_name        = $params['last_name'];
                $user->second_last_name = $params['second_last_name'];
                $user->gender           = $params['gender'];
                $user->role             = "ROLE_STUDENT";
                $user->password         = \bcrypt($params['password']);

                // Guardar usuario
                $user->save();

                $data = array(
                    'status'    => 'success',
                    'code'      => 200,
                    'message'   => 'El usuario se ha creado correctamente',
                    'user'      => $user
                );
            }
        } else {
            $data = array(
                'status'    => 'error',
                'code'      => 404,
                'message'   => 'Los datos enviados no son correctos',
            );
        }
        
        return response()->json($data, $data['code']);
    }

    public function login(Request $request) {
        $jwtAuth = new \JwtAuth();
        $json = $request->input('json', null);
        $params = json_decode($json, true);

        $validate = \Validator::make($params, [
            'id'            => 'required|alpha_num',
            'password'      => 'required'
        ]);

        if($validate->fails()) {
            $signup = array(
                'status'    => 'error',
                'code'      => 404,
                'message'   => 'El usuario no se ha podido identificar',
                'errors'    => $validate->errors()
            );

        } else {
            $signup = $jwtAuth->signup($params['id'], $params['password']);
            if (!empty($params['gettoken'])) {
                $signup = $jwtAuth->signup($params['id'], $params['password'], true);
            }

        }
        return response()->json($signup, 200);
    }
}
