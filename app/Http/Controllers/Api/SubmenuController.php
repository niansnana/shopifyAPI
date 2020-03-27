<?php

    namespace App\Http\Controllers\Api;

    use App\Http\Controllers\Controller;
    use App\Models\Submenu;
    use App\Http\Resources\Submenu as SubMenuResource;
    use Illuminate\Http\Request;

    class SubmenuController extends Controller
    {
        // 子菜单API
        public function index()
        {
            $result = Submenu::all();
            if($result){
                return response()->json([
                    'status' => true,
                    'code' => '200',
                    'msg' => '查询成功',
                    'data' => $result
                ]);
            }else{
                return response()->json([
                    'status' => false,
                    'code' => '400',
                    'msg' => '失败成功'
                ]);
            }
        }

        public function show($id)
        {
            $result = Submenu::find($id);
            if($result){
                return response()->json([
                    'status' => true,
                    'code' => '201',
                    'msg' => '查询成功',
                    'data' => new SubMenuResource($result)
                ]);
            }else{
                return response()->json([
                    'status' => false,
                    'code' => '400',
                    'msg' => '查询失败'
                ]);
            }
        }

        public function store(Request $request)
        {
            $data = $request->all();
            $result = Submenu::create($data);
            if($result){
                return response()->json([
                    'status' => true,
                    'code' => '201',
                    'msg' => '创建成功',
                    'data' => new SubMenuResource($result)
                ]);
            }else{
                return response()->json([
                    'status' => false,
                    'code' => '400',
                    'msg' => '创建失败'
                ]);
            }
        }

        public function update(Request $request, $id)
        {
            $data = $request->all();
            $result = Submenu::find($id)->update($data);
            if($result){
                return response()->json([
                    'status' => true,
                    'code' => '200',
                    'msg' => '更新成功',
                    'data' => new SubMenuResource(Submenu::find($id))
                ]);
            }else{
                return response()->json([
                    'status' => false,
                    'code' => '400',
                    'msg' => '更新失败'
                ]);
            }
        }

        public function destroy($id)
        {
            $result = Submenu::find($id)->delete();
            if($result){
                return response()->json([
                    'status' => true,
                    'code' => '204',
                    'msg' => '删除成功',
                    'data' => new SubMenuResource(Submenu::find($id))
                ]);
            }else{
                return response()->json([
                    'status' => false,
                    'code' => '400',
                    'msg' => '删除失败'
                ]);
            }
        }
    }
