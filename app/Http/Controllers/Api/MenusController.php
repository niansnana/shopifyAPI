<?php

    namespace App\Http\Controllers\Api;

    use App\Http\Controllers\Controller;
    use App\Models\Menus;
    use App\Http\Resources\Menus as MenusResource;
    use Illuminate\Http\Request;

    class MenusController extends Controller
    {
        // 增
        public function add(Request $request)
        {
            $data = $request->all();
            $result = Menus::create($data);
            if ($result) {
                return response()->json([
                    'status' => true,
                    'code'   => '201',
                    'msg'    => '添加成功',
                    'data' => new MenusResource($result)
                ]);
            } else {
                return response()->json([
                    'status' => false,
                    'code'   => '400',
                    'msg'    => '请求错误',
                    'data' => new MenusResource($result)
                ]);
            }
        }

        // 删
        public function delete($id)
        {
            $result = Menus::find($id)->delete();
            if ($result) {
                return response()->json([
                    'status' => true,
                    'code'   => '204',
                    'msg'    => '删除成功'
                ]);
            } else {
                return response()->json([
                    'status' => false,
                    'code'   => '400',
                    'msg'    => '删除失败'
                ]);
            }
        }

        // 改
        public function update(Request $request, $id)
        {
            $data = $request->all();
            $result = Menus::find($id)->update($data);
            if ($result) {
                return response()->json([
                    'status' => true,
                    'code'   => '200',
                    'msg'    => '修改成功',
                    'data' => new MenusResource(Menus::find($id))
                ]);
            } else {
                return response()->json([
                    'status' => false,
                    'code'   => '400',
                    'msg'    => '请求错误'
                ]);
            }
        }

        // 查
        public function index()
        {
            $result = Menus::all();
            if ($result) {
                return response()->json([
                    'status' => true,
                    'code'   => '200',
                    'msg'    => '查询成功',
                    'data'   => $result,
                    'data' => $result
                ]);
            } else {
                return response()->json([
                    'status' => false,
                    'code'   => '400',
                    'msg'    => '查询失败'
                ]);
            }
        }

        public function show($id)
        {
            $result = Menus::find($id);
            if ($result) {
                return response()->json([
                    'status' => true,
                    'code'   => '200',
                    'msg'    => '查询成功',
                    'data'   => $result,
                    'data' => new MenusResource($result)
                ]);
            } else {
                return response()->json([
                    'status' => false,
                    'code'   => '400',
                    'msg'    => '查询失败'
                ]);
            }
        }
    }
