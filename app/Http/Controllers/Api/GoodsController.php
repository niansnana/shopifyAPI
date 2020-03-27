<?php

    namespace App\Http\Controllers\Api;

    use App\Http\Controllers\Controller;
    use App\Models\Goods;
    use App\Http\Resources\Goods as GoodsResource;
    use Illuminate\Http\Request;

    class GoodsController extends Controller
    {
        // 商品API
        public function index()
        {
            $result = Goods::all();
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
            $result = Goods::find($id);
            if($result){
                return response()->json([
                   'status' => true,
                   'code' => '201',
                   'msg' => '查询成功',
                   'data' => new GoodsResource($result)
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
            $result = Goods::create($data);
            if($result){
                return response()->json([
                   'status' => true,
                   'code' => '201',
                   'msg' => '创建成功',
                   'data' => new GoodsResource($result)
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
            $result = Goods::find($id)->update($data);
            if($result){
                return response()->json([
                   'status' => true,
                   'code' => '200',
                   'msg' => '更新成功',
                   'data' => new GoodsResource(Goods::find($id))
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
            $result = Goods::find($id)->delete();
            if($result){
                return response()->json([
                    'status' => true,
                    'code' => '204',
                    'msg' => '删除成功'
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
