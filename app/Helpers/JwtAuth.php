<?php
namespace App\Helpers;

use Firebase\JWT\JWT;
use Iluminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\User;

class JwtAuth {

    public $key;

    public function __construct() {
        $this->key = 'clave_super_segur_secreta_ninja-1512';
    }

    public function signup($id, $password, $getToken = null) {
        $user = User::where('id', $id)->first();
        if (!$user) {
            $data = array(
                'status'    => 'error',
                'code'      => 404,
                'message'   => 'Matricula no existe',
            );
            return response()->json($data, $data['code']);
        } else {
            if (!Hash::check($password, $user->password)) {
                $data = array(
                    'status'    => 'error',
                    'code'      => 404,
                    'message'   => 'Contrasena incorrecta',
                );
                return response()->json($data, $data['code']);
            } else {
                $token = array(
                    'sub'           => $user->id,
                    'name'          => $user->name,
                    'role'          => $user->role,
                    'surname'       => $user->last_name.' '.$user->second_last_name,
                    'lat'           => time(),
                    'exp'           => time() + (7 * 24 * 60 * 60)
                );
    
                $jwt = JWT::encode($token, $this->key, 'HS256');
                $decoded = JWT::decode($jwt, $this->key, ['HS256']);
    
                if(is_null($getToken)) {
                    $data = $jwt;
                } else {
                    $data = $decoded;
                }
            }
            return $data;
        }
    }

    public function checkToken($jwt, $getIdentity = false) {
        $auth = false;

        try {
            $jwt = \str_replace('"', '', $jwt);
            $decoded = JWT::decode($jwt, $this->key, ['HS256']);
            
        } catch (\UnexpectedValueException $e) {
            $auth = false;
        } catch (\DomainException $e) {
            $auth = false;
        }

        if (!empty($decoded) && is_object($decoded) && isset($decoded->sub)) {
            $auth = true;
        } else {
            $auth = false;
        }

        if ($getIdentity) {
            return $decoded;
        }

        return $auth;
    }
}