{"filter":false,"title":"create.blade.php","tooltip":"/mynews/resources/views/admin/profile/create.blade.php","ace":{"folds":[],"scrolltop":10.5,"scrollleft":0,"selection":{"start":{"row":20,"column":20},"end":{"row":25,"column":26},"isBackwards":true},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":0},"hash":"8ad1a4f387ab012f660d876ef2a48a4e87efe706","mime":"application/octet-stream","undoManager":{"mark":100,"position":100,"stack":[[{"start":{"row":10,"column":33},"end":{"row":10,"column":34},"action":"remove","lines":["下"],"id":392}],[{"start":{"row":10,"column":33},"end":{"row":10,"column":34},"action":"insert","lines":["↓"],"id":393}],[{"start":{"row":10,"column":34},"end":{"row":10,"column":57},"action":"insert","lines":["Admin\\ProfileController"],"id":394}],[{"start":{"row":11,"column":50},"end":{"row":11,"column":51},"action":"remove","lines":["s"],"id":395},{"start":{"row":11,"column":49},"end":{"row":11,"column":50},"action":"remove","lines":["w"]},{"start":{"row":11,"column":48},"end":{"row":11,"column":49},"action":"remove","lines":["e"]},{"start":{"row":11,"column":47},"end":{"row":11,"column":48},"action":"remove","lines":["N"]}],[{"start":{"row":11,"column":47},"end":{"row":11,"column":48},"action":"insert","lines":["P"],"id":396},{"start":{"row":11,"column":48},"end":{"row":11,"column":49},"action":"insert","lines":["r"]},{"start":{"row":11,"column":49},"end":{"row":11,"column":50},"action":"insert","lines":["o"]},{"start":{"row":11,"column":50},"end":{"row":11,"column":51},"action":"insert","lines":["f"]},{"start":{"row":11,"column":51},"end":{"row":11,"column":52},"action":"insert","lines":["i"]},{"start":{"row":11,"column":52},"end":{"row":11,"column":53},"action":"insert","lines":["l"]}],[{"start":{"row":11,"column":53},"end":{"row":11,"column":54},"action":"insert","lines":["e"],"id":397}],[{"start":{"row":10,"column":34},"end":{"row":10,"column":57},"action":"remove","lines":["Admin\\ProfileController"],"id":398}],[{"start":{"row":10,"column":34},"end":{"row":10,"column":42},"action":"insert","lines":["フォームの送信先"],"id":399},{"start":{"row":10,"column":42},"end":{"row":10,"column":43},"action":"insert","lines":["を"]}],[{"start":{"row":10,"column":43},"end":{"row":10,"column":86},"action":"insert","lines":["Admin\\ProfileController の create Action に指定"],"id":400}],[{"start":{"row":10,"column":82},"end":{"row":10,"column":83},"action":"remove","lines":[" "],"id":401}],[{"start":{"row":10,"column":75},"end":{"row":10,"column":76},"action":"remove","lines":[" "],"id":402}],[{"start":{"row":10,"column":68},"end":{"row":10,"column":69},"action":"remove","lines":[" "],"id":403}],[{"start":{"row":10,"column":66},"end":{"row":10,"column":67},"action":"remove","lines":[" "],"id":404}],[{"start":{"row":10,"column":73},"end":{"row":10,"column":74},"action":"insert","lines":["　"],"id":405}],[{"start":{"row":10,"column":73},"end":{"row":10,"column":74},"action":"remove","lines":["　"],"id":406}],[{"start":{"row":10,"column":73},"end":{"row":10,"column":74},"action":"insert","lines":[" "],"id":407}],[{"start":{"row":5,"column":0},"end":{"row":5,"column":16},"action":"remove","lines":["//contentsの中身を記載"],"id":409}],[{"start":{"row":2,"column":0},"end":{"row":2,"column":11},"action":"remove","lines":["//title欄の指定"],"id":410}],[{"start":{"row":0,"column":0},"end":{"row":0,"column":30},"action":"remove","lines":["//layouts/admin.blade.phpの読み込み"],"id":411}],[{"start":{"row":10,"column":31},"end":{"row":10,"column":83},"action":"remove","lines":["//↓フォームの送信先をAdmin\\ProfileControllerのcreate Actionに指定"],"id":412}],[{"start":{"row":6,"column":0},"end":{"row":49,"column":11},"action":"remove","lines":["@section('contents')","    <div class=\"container\">","        <div class=\"row\">","            <div class=\"col-md-8 mx-auto\">","                <h2>自己紹介作成</h2>","                <form action=\"{{ action('Admin\\ProfileController@create')}}\" method=\"post\" enctype=\"multiport/form-data\">","                    @if (count($errors) > 0)","                        <ul>","                            @foreach($errors->all() as $e)","                                <li>{{ $e }}</li>","                            @endforeach","                        </ul>","                    @endif","                    <div class=\"form-group row\">","                        <label class=\"col-md-2\">氏名</label>","                        <div class=\"col-md-10\">","                            <input type=\"text\" class=\"form-control\" name=\"title\" value=\"{{ old('title') }}\">","                        </div>","                    </div>","                    <div class=\"form-group row\">","                        <label class=\"col-md-2\">性別</label>","                        <div class=\"col-md-10\">","                            <input type=\"text\" class=\"form-control\" name=\"title\" value=\"{{ old('title') }}\">","                        </div>","                    </div>","                    <div class=\"form-group row\">","                        <label class=\"col-md-2\">趣味</label>","                        <div class=\"col-md-10\">","                            <textarea class=\"form-control\" name=\"body\" rows=\"20\">{{ old('body') }}</textarea>","                        </div>","                    </div>","                    <div class=\"form-group row\">","                        <label class=\"col-md-2\">自己紹介欄</label>","                        <div class=\"col-md-10\">","                            <textarea class=\"form-control\" name=\"body\" rows=\"20\">{{ old('body') }}</textarea>","                        </div>","                    </div>","                    {{ csrf_field() }}","                    <input type=\"submit\" class=\"btn btn-primary\" value=\"登録\">","                </form>","            </div>","        </div>","    </div>","@endsection"],"id":414},{"start":{"row":6,"column":0},"end":{"row":44,"column":11},"action":"insert","lines":["@section('content')","    <div class=\"container\">","        <div class=\"row\">","            <div class=\"col-md-8 mx-auto\">","                <h2>ニュース新規作成</h2>","                <form action=\"{{ action('Admin\\NewsController@create') }}\" method=\"post\" enctype=\"multipart/form-data\">","","                    @if (count($errors) > 0)","                        <ul>","                            @foreach($errors->all() as $e)","                                <li>{{ $e }}</li>","                            @endforeach","                        </ul>","                    @endif","                    <div class=\"form-group row\">","                        <label class=\"col-md-2\">タイトル</label>","                        <div class=\"col-md-10\">","                            <input type=\"text\" class=\"form-control\" name=\"title\" value=\"{{ old('title') }}\">","                        </div>","                    </div>","                    <div class=\"form-group row\">","                        <label class=\"col-md-2\">本文</label>","                        <div class=\"col-md-10\">","                            <textarea class=\"form-control\" name=\"body\" rows=\"20\">{{ old('body') }}</textarea>","                        </div>","                    </div>","                    <div class=\"form-group row\">","                        <label class=\"col-md-2\">画像</label>","                        <div class=\"col-md-10\">","                            <input type=\"file\" class=\"form-control-file\" name=\"image\">","                        </div>","                    </div>","                    {{ csrf_field() }}","                    <input type=\"submit\" class=\"btn btn-primary\" value=\"更新\">","                </form>","            </div>","        </div>","    </div>","@endsection"]}],[{"start":{"row":11,"column":67},"end":{"row":11,"column":68},"action":"remove","lines":["e"],"id":415},{"start":{"row":11,"column":66},"end":{"row":11,"column":67},"action":"remove","lines":["t"]},{"start":{"row":11,"column":65},"end":{"row":11,"column":66},"action":"remove","lines":["a"]},{"start":{"row":11,"column":64},"end":{"row":11,"column":65},"action":"remove","lines":["e"]},{"start":{"row":11,"column":63},"end":{"row":11,"column":64},"action":"remove","lines":["r"]},{"start":{"row":11,"column":62},"end":{"row":11,"column":63},"action":"remove","lines":["c"]}],[{"start":{"row":11,"column":62},"end":{"row":11,"column":63},"action":"insert","lines":["p"],"id":416}],[{"start":{"row":11,"column":63},"end":{"row":11,"column":64},"action":"insert","lines":["l"],"id":417},{"start":{"row":11,"column":64},"end":{"row":11,"column":65},"action":"insert","lines":["o"]},{"start":{"row":11,"column":65},"end":{"row":11,"column":66},"action":"insert","lines":["f"]},{"start":{"row":11,"column":66},"end":{"row":11,"column":67},"action":"insert","lines":["i"]},{"start":{"row":11,"column":67},"end":{"row":11,"column":68},"action":"insert","lines":["l"]},{"start":{"row":11,"column":68},"end":{"row":11,"column":69},"action":"insert","lines":["e"]}],[{"start":{"row":11,"column":63},"end":{"row":11,"column":64},"action":"remove","lines":["l"],"id":418}],[{"start":{"row":11,"column":63},"end":{"row":11,"column":64},"action":"insert","lines":["r"],"id":419}],[{"start":{"row":11,"column":50},"end":{"row":11,"column":51},"action":"remove","lines":["s"],"id":420},{"start":{"row":11,"column":49},"end":{"row":11,"column":50},"action":"remove","lines":["w"]},{"start":{"row":11,"column":48},"end":{"row":11,"column":49},"action":"remove","lines":["e"]},{"start":{"row":11,"column":47},"end":{"row":11,"column":48},"action":"remove","lines":["N"]}],[{"start":{"row":11,"column":47},"end":{"row":11,"column":48},"action":"insert","lines":["P"],"id":421},{"start":{"row":11,"column":48},"end":{"row":11,"column":49},"action":"insert","lines":["r"]},{"start":{"row":11,"column":49},"end":{"row":11,"column":50},"action":"insert","lines":["o"]},{"start":{"row":11,"column":50},"end":{"row":11,"column":51},"action":"insert","lines":["f"]},{"start":{"row":11,"column":51},"end":{"row":11,"column":52},"action":"insert","lines":["i"]},{"start":{"row":11,"column":52},"end":{"row":11,"column":53},"action":"insert","lines":["l"]},{"start":{"row":11,"column":53},"end":{"row":11,"column":54},"action":"insert","lines":["e"]}],[{"start":{"row":11,"column":70},"end":{"row":11,"column":71},"action":"remove","lines":["l"],"id":422},{"start":{"row":11,"column":69},"end":{"row":11,"column":70},"action":"remove","lines":["i"]},{"start":{"row":11,"column":68},"end":{"row":11,"column":69},"action":"remove","lines":["f"]},{"start":{"row":11,"column":67},"end":{"row":11,"column":68},"action":"remove","lines":["o"]},{"start":{"row":11,"column":66},"end":{"row":11,"column":67},"action":"remove","lines":["r"]},{"start":{"row":11,"column":65},"end":{"row":11,"column":66},"action":"remove","lines":["p"]}],[{"start":{"row":11,"column":65},"end":{"row":11,"column":66},"action":"insert","lines":["c"],"id":423},{"start":{"row":11,"column":66},"end":{"row":11,"column":67},"action":"insert","lines":["r"]},{"start":{"row":11,"column":67},"end":{"row":11,"column":68},"action":"insert","lines":["e"]},{"start":{"row":11,"column":68},"end":{"row":11,"column":69},"action":"insert","lines":["a"]},{"start":{"row":11,"column":69},"end":{"row":11,"column":70},"action":"insert","lines":["t"]}],[{"start":{"row":1,"column":22},"end":{"row":1,"column":23},"action":"remove","lines":["n"],"id":424},{"start":{"row":1,"column":21},"end":{"row":1,"column":22},"action":"remove","lines":["i"]},{"start":{"row":1,"column":20},"end":{"row":1,"column":21},"action":"remove","lines":["m"]},{"start":{"row":1,"column":19},"end":{"row":1,"column":20},"action":"remove","lines":["d"]},{"start":{"row":1,"column":18},"end":{"row":1,"column":19},"action":"remove","lines":["a"]}],[{"start":{"row":1,"column":18},"end":{"row":1,"column":19},"action":"insert","lines":["p"],"id":425},{"start":{"row":1,"column":19},"end":{"row":1,"column":20},"action":"insert","lines":["r"]},{"start":{"row":1,"column":20},"end":{"row":1,"column":21},"action":"insert","lines":["o"]},{"start":{"row":1,"column":21},"end":{"row":1,"column":22},"action":"insert","lines":["f"]},{"start":{"row":1,"column":22},"end":{"row":1,"column":23},"action":"insert","lines":["i"]},{"start":{"row":1,"column":23},"end":{"row":1,"column":24},"action":"insert","lines":["l"]}],[{"start":{"row":1,"column":24},"end":{"row":1,"column":25},"action":"insert","lines":["e"],"id":426}],[{"start":{"row":21,"column":51},"end":{"row":21,"column":52},"action":"remove","lines":["ル"],"id":427},{"start":{"row":21,"column":50},"end":{"row":21,"column":51},"action":"remove","lines":["ト"]},{"start":{"row":21,"column":49},"end":{"row":21,"column":50},"action":"remove","lines":["イ"]},{"start":{"row":21,"column":48},"end":{"row":21,"column":49},"action":"remove","lines":["タ"]}],[{"start":{"row":21,"column":48},"end":{"row":21,"column":49},"action":"insert","lines":["s"],"id":428},{"start":{"row":21,"column":49},"end":{"row":21,"column":50},"action":"insert","lines":["i"]},{"start":{"row":21,"column":50},"end":{"row":21,"column":51},"action":"insert","lines":["m"]},{"start":{"row":21,"column":51},"end":{"row":21,"column":52},"action":"insert","lines":["e"]},{"start":{"row":21,"column":52},"end":{"row":21,"column":53},"action":"insert","lines":["i"]}],[{"start":{"row":21,"column":53},"end":{"row":21,"column":54},"action":"insert","lines":[" "],"id":429}],[{"start":{"row":21,"column":53},"end":{"row":21,"column":54},"action":"remove","lines":[" "],"id":430},{"start":{"row":21,"column":52},"end":{"row":21,"column":53},"action":"remove","lines":["i"]},{"start":{"row":21,"column":51},"end":{"row":21,"column":52},"action":"remove","lines":["e"]},{"start":{"row":21,"column":50},"end":{"row":21,"column":51},"action":"remove","lines":["m"]},{"start":{"row":21,"column":49},"end":{"row":21,"column":50},"action":"remove","lines":["i"]},{"start":{"row":21,"column":48},"end":{"row":21,"column":49},"action":"remove","lines":["s"]}],[{"start":{"row":21,"column":48},"end":{"row":21,"column":50},"action":"insert","lines":["氏名"],"id":431}],[{"start":{"row":27,"column":49},"end":{"row":27,"column":50},"action":"remove","lines":["文"],"id":432},{"start":{"row":27,"column":48},"end":{"row":27,"column":49},"action":"remove","lines":["本"]}],[{"start":{"row":27,"column":48},"end":{"row":27,"column":50},"action":"insert","lines":["性別"],"id":433}],[{"start":{"row":33,"column":49},"end":{"row":33,"column":50},"action":"remove","lines":["像"],"id":434},{"start":{"row":33,"column":48},"end":{"row":33,"column":49},"action":"remove","lines":["画"]}],[{"start":{"row":33,"column":48},"end":{"row":33,"column":50},"action":"insert","lines":["趣味"],"id":435}],[{"start":{"row":37,"column":26},"end":{"row":38,"column":0},"action":"insert","lines":["",""],"id":436},{"start":{"row":38,"column":0},"end":{"row":38,"column":20},"action":"insert","lines":["                    "]}],[{"start":{"row":38,"column":20},"end":{"row":43,"column":26},"action":"insert","lines":["<div class=\"form-group row\">","                        <label class=\"col-md-2\">趣味</label>","                        <div class=\"col-md-10\">","                            <input type=\"file\" class=\"form-control-file\" name=\"image\">","                        </div>","                    </div>"],"id":437}],[{"start":{"row":39,"column":49},"end":{"row":39,"column":50},"action":"remove","lines":["味"],"id":443},{"start":{"row":39,"column":48},"end":{"row":39,"column":49},"action":"remove","lines":["趣"]}],[{"start":{"row":39,"column":48},"end":{"row":39,"column":53},"action":"insert","lines":["自己紹介欄"],"id":444}],[{"start":{"row":32,"column":20},"end":{"row":37,"column":26},"action":"remove","lines":["<div class=\"form-group row\">","                        <label class=\"col-md-2\">趣味</label>","                        <div class=\"col-md-10\">","                            <input type=\"file\" class=\"form-control-file\" name=\"image\">","                        </div>","                    </div>"],"id":445},{"start":{"row":32,"column":20},"end":{"row":37,"column":26},"action":"insert","lines":["<div class=\"form-group row\">","                        <label class=\"col-md-2\">本文</label>","                        <div class=\"col-md-10\">","                            <textarea class=\"form-control\" name=\"body\" rows=\"20\">{{ old('body') }}</textarea>","                        </div>","                    </div>"]}],[{"start":{"row":33,"column":49},"end":{"row":33,"column":50},"action":"remove","lines":["文"],"id":446},{"start":{"row":33,"column":48},"end":{"row":33,"column":49},"action":"remove","lines":["本"]}],[{"start":{"row":33,"column":48},"end":{"row":33,"column":50},"action":"insert","lines":["趣味"],"id":447}],[{"start":{"row":38,"column":20},"end":{"row":43,"column":26},"action":"remove","lines":["<div class=\"form-group row\">","                        <label class=\"col-md-2\">自己紹介欄</label>","                        <div class=\"col-md-10\">","                            <input type=\"file\" class=\"form-control-file\" name=\"image\">","                        </div>","                    </div>"],"id":448},{"start":{"row":38,"column":20},"end":{"row":43,"column":26},"action":"insert","lines":["<div class=\"form-group row\">","                        <label class=\"col-md-2\">本文</label>","                        <div class=\"col-md-10\">","                            <textarea class=\"form-control\" name=\"body\" rows=\"20\">{{ old('body') }}</textarea>","                        </div>","                    </div>"]}],[{"start":{"row":39,"column":49},"end":{"row":39,"column":50},"action":"remove","lines":["文"],"id":449},{"start":{"row":39,"column":48},"end":{"row":39,"column":49},"action":"remove","lines":["本"]}],[{"start":{"row":39,"column":48},"end":{"row":39,"column":53},"action":"insert","lines":["自己紹介欄"],"id":450}],[{"start":{"row":26,"column":20},"end":{"row":31,"column":26},"action":"remove","lines":["<div class=\"form-group row\">","                        <label class=\"col-md-2\">性別</label>","                        <div class=\"col-md-10\">","                            <textarea class=\"form-control\" name=\"body\" rows=\"20\">{{ old('body') }}</textarea>","                        </div>","                    </div>"],"id":451},{"start":{"row":26,"column":20},"end":{"row":31,"column":26},"action":"insert","lines":["<div class=\"form-group row\">","                        <label class=\"col-md-2\">氏名</label>","                        <div class=\"col-md-10\">","                            <input type=\"text\" class=\"form-control\" name=\"title\" value=\"{{ old('title') }}\">","                        </div>","                    </div>"]}],[{"start":{"row":27,"column":49},"end":{"row":27,"column":50},"action":"remove","lines":["名"],"id":452},{"start":{"row":27,"column":48},"end":{"row":27,"column":49},"action":"remove","lines":["氏"]}],[{"start":{"row":27,"column":48},"end":{"row":27,"column":50},"action":"insert","lines":["性別"],"id":453}],[{"start":{"row":45,"column":73},"end":{"row":45,"column":74},"action":"remove","lines":["新"],"id":454},{"start":{"row":45,"column":72},"end":{"row":45,"column":73},"action":"remove","lines":["更"]}],[{"start":{"row":45,"column":72},"end":{"row":45,"column":74},"action":"insert","lines":["登録"],"id":455}],[{"start":{"row":35,"column":78},"end":{"row":35,"column":79},"action":"remove","lines":["0"],"id":456},{"start":{"row":35,"column":77},"end":{"row":35,"column":78},"action":"remove","lines":["2"]}],[{"start":{"row":35,"column":77},"end":{"row":35,"column":78},"action":"insert","lines":["1"],"id":457},{"start":{"row":35,"column":78},"end":{"row":35,"column":79},"action":"insert","lines":["0"]}],[{"start":{"row":41,"column":78},"end":{"row":41,"column":79},"action":"remove","lines":["0"],"id":458},{"start":{"row":41,"column":77},"end":{"row":41,"column":78},"action":"remove","lines":["2"]}],[{"start":{"row":41,"column":77},"end":{"row":41,"column":78},"action":"insert","lines":["1"],"id":459},{"start":{"row":41,"column":78},"end":{"row":41,"column":79},"action":"insert","lines":["0"]}],[{"start":{"row":41,"column":68},"end":{"row":41,"column":69},"action":"remove","lines":["y"],"id":460},{"start":{"row":41,"column":67},"end":{"row":41,"column":68},"action":"remove","lines":["d"]},{"start":{"row":41,"column":66},"end":{"row":41,"column":67},"action":"remove","lines":["o"]},{"start":{"row":41,"column":65},"end":{"row":41,"column":66},"action":"remove","lines":["b"]}],[{"start":{"row":41,"column":65},"end":{"row":41,"column":77},"action":"insert","lines":["introduction"],"id":461}],[{"start":{"row":41,"column":100},"end":{"row":41,"column":101},"action":"remove","lines":["y"],"id":462},{"start":{"row":41,"column":99},"end":{"row":41,"column":100},"action":"remove","lines":["d"]},{"start":{"row":41,"column":98},"end":{"row":41,"column":99},"action":"remove","lines":["o"]},{"start":{"row":41,"column":97},"end":{"row":41,"column":98},"action":"remove","lines":["b"]}],[{"start":{"row":41,"column":97},"end":{"row":41,"column":109},"action":"insert","lines":["introduction"],"id":463}],[{"start":{"row":35,"column":68},"end":{"row":35,"column":69},"action":"remove","lines":["y"],"id":464},{"start":{"row":35,"column":67},"end":{"row":35,"column":68},"action":"remove","lines":["d"]},{"start":{"row":35,"column":66},"end":{"row":35,"column":67},"action":"remove","lines":["o"]},{"start":{"row":35,"column":65},"end":{"row":35,"column":66},"action":"remove","lines":["b"]}],[{"start":{"row":35,"column":65},"end":{"row":35,"column":70},"action":"insert","lines":["hobby"],"id":465}],[{"start":{"row":29,"column":78},"end":{"row":29,"column":79},"action":"remove","lines":["e"],"id":466},{"start":{"row":29,"column":77},"end":{"row":29,"column":78},"action":"remove","lines":["l"]},{"start":{"row":29,"column":76},"end":{"row":29,"column":77},"action":"remove","lines":["t"]},{"start":{"row":29,"column":75},"end":{"row":29,"column":76},"action":"remove","lines":["i"]},{"start":{"row":29,"column":74},"end":{"row":29,"column":75},"action":"remove","lines":["t"]}],[{"start":{"row":29,"column":74},"end":{"row":29,"column":80},"action":"insert","lines":["gender"],"id":467}],[{"start":{"row":23,"column":78},"end":{"row":23,"column":79},"action":"remove","lines":["e"],"id":468},{"start":{"row":23,"column":77},"end":{"row":23,"column":78},"action":"remove","lines":["l"]},{"start":{"row":23,"column":76},"end":{"row":23,"column":77},"action":"remove","lines":["t"]},{"start":{"row":23,"column":75},"end":{"row":23,"column":76},"action":"remove","lines":["i"]},{"start":{"row":23,"column":74},"end":{"row":23,"column":75},"action":"remove","lines":["t"]}],[{"start":{"row":23,"column":74},"end":{"row":23,"column":75},"action":"insert","lines":["n"],"id":469},{"start":{"row":23,"column":75},"end":{"row":23,"column":76},"action":"insert","lines":["a"]},{"start":{"row":23,"column":76},"end":{"row":23,"column":77},"action":"insert","lines":["m"]},{"start":{"row":23,"column":77},"end":{"row":23,"column":78},"action":"insert","lines":["e"]}],[{"start":{"row":21,"column":47},"end":{"row":21,"column":48},"action":"insert","lines":[" "],"id":470}],[{"start":{"row":21,"column":47},"end":{"row":21,"column":48},"action":"remove","lines":[" "],"id":471}],[{"start":{"row":21,"column":47},"end":{"row":21,"column":48},"action":"insert","lines":[" "],"id":472}],[{"start":{"row":21,"column":48},"end":{"row":21,"column":49},"action":"insert","lines":["f"],"id":473},{"start":{"row":21,"column":49},"end":{"row":21,"column":50},"action":"insert","lines":["o"]},{"start":{"row":21,"column":50},"end":{"row":21,"column":51},"action":"insert","lines":["r"]}],[{"start":{"row":21,"column":51},"end":{"row":21,"column":52},"action":"insert","lines":["="],"id":474}],[{"start":{"row":21,"column":52},"end":{"row":21,"column":54},"action":"insert","lines":["\"\""],"id":475}],[{"start":{"row":21,"column":53},"end":{"row":21,"column":54},"action":"insert","lines":["n"],"id":476},{"start":{"row":21,"column":54},"end":{"row":21,"column":55},"action":"insert","lines":["a"]},{"start":{"row":21,"column":55},"end":{"row":21,"column":56},"action":"insert","lines":["m"]},{"start":{"row":21,"column":56},"end":{"row":21,"column":57},"action":"insert","lines":["e"]}],[{"start":{"row":21,"column":53},"end":{"row":21,"column":57},"action":"remove","lines":["name"],"id":477},{"start":{"row":21,"column":53},"end":{"row":21,"column":57},"action":"insert","lines":["name"]}],[{"start":{"row":27,"column":47},"end":{"row":27,"column":48},"action":"insert","lines":[" "],"id":478},{"start":{"row":27,"column":48},"end":{"row":27,"column":49},"action":"insert","lines":["f"]},{"start":{"row":27,"column":49},"end":{"row":27,"column":50},"action":"insert","lines":["o"]},{"start":{"row":27,"column":50},"end":{"row":27,"column":51},"action":"insert","lines":["r"]}],[{"start":{"row":27,"column":51},"end":{"row":27,"column":52},"action":"insert","lines":[" "],"id":479}],[{"start":{"row":27,"column":51},"end":{"row":27,"column":52},"action":"remove","lines":[" "],"id":480}],[{"start":{"row":27,"column":51},"end":{"row":27,"column":52},"action":"insert","lines":["="],"id":481}],[{"start":{"row":27,"column":52},"end":{"row":27,"column":54},"action":"insert","lines":["\"\""],"id":482}],[{"start":{"row":27,"column":53},"end":{"row":27,"column":54},"action":"insert","lines":["g"],"id":483},{"start":{"row":27,"column":54},"end":{"row":27,"column":55},"action":"insert","lines":["e"]},{"start":{"row":27,"column":55},"end":{"row":27,"column":56},"action":"insert","lines":["n"]},{"start":{"row":27,"column":56},"end":{"row":27,"column":57},"action":"insert","lines":["d"]},{"start":{"row":27,"column":57},"end":{"row":27,"column":58},"action":"insert","lines":["e"]},{"start":{"row":27,"column":58},"end":{"row":27,"column":59},"action":"insert","lines":["r"]}],[{"start":{"row":33,"column":47},"end":{"row":33,"column":48},"action":"insert","lines":["f"],"id":484},{"start":{"row":33,"column":48},"end":{"row":33,"column":49},"action":"insert","lines":["o"]},{"start":{"row":33,"column":49},"end":{"row":33,"column":50},"action":"insert","lines":["r"]}],[{"start":{"row":33,"column":49},"end":{"row":33,"column":50},"action":"remove","lines":["r"],"id":485},{"start":{"row":33,"column":48},"end":{"row":33,"column":49},"action":"remove","lines":["o"]},{"start":{"row":33,"column":47},"end":{"row":33,"column":48},"action":"remove","lines":["f"]}],[{"start":{"row":33,"column":47},"end":{"row":33,"column":48},"action":"insert","lines":[" "],"id":486},{"start":{"row":33,"column":48},"end":{"row":33,"column":49},"action":"insert","lines":["f"]},{"start":{"row":33,"column":49},"end":{"row":33,"column":50},"action":"insert","lines":["o"]},{"start":{"row":33,"column":50},"end":{"row":33,"column":51},"action":"insert","lines":["r"]}],[{"start":{"row":33,"column":51},"end":{"row":33,"column":52},"action":"insert","lines":["="],"id":487}],[{"start":{"row":33,"column":52},"end":{"row":33,"column":54},"action":"insert","lines":["\"\""],"id":488}],[{"start":{"row":33,"column":53},"end":{"row":33,"column":54},"action":"insert","lines":["h"],"id":489},{"start":{"row":33,"column":54},"end":{"row":33,"column":55},"action":"insert","lines":["o"]},{"start":{"row":33,"column":55},"end":{"row":33,"column":56},"action":"insert","lines":["b"]},{"start":{"row":33,"column":56},"end":{"row":33,"column":57},"action":"insert","lines":["b"]},{"start":{"row":33,"column":57},"end":{"row":33,"column":58},"action":"insert","lines":["y"]}],[{"start":{"row":39,"column":47},"end":{"row":39,"column":48},"action":"insert","lines":[" "],"id":490},{"start":{"row":39,"column":48},"end":{"row":39,"column":49},"action":"insert","lines":["f"]},{"start":{"row":39,"column":49},"end":{"row":39,"column":50},"action":"insert","lines":["o"]},{"start":{"row":39,"column":50},"end":{"row":39,"column":51},"action":"insert","lines":["r"]}],[{"start":{"row":39,"column":51},"end":{"row":39,"column":52},"action":"insert","lines":[" "],"id":491},{"start":{"row":39,"column":52},"end":{"row":39,"column":53},"action":"insert","lines":["="]}],[{"start":{"row":39,"column":52},"end":{"row":39,"column":53},"action":"remove","lines":["="],"id":492},{"start":{"row":39,"column":51},"end":{"row":39,"column":52},"action":"remove","lines":[" "]}],[{"start":{"row":39,"column":51},"end":{"row":39,"column":52},"action":"insert","lines":["="],"id":493}],[{"start":{"row":39,"column":52},"end":{"row":39,"column":54},"action":"insert","lines":["\"\""],"id":494}],[{"start":{"row":39,"column":53},"end":{"row":39,"column":54},"action":"insert","lines":["g"],"id":495},{"start":{"row":39,"column":54},"end":{"row":39,"column":55},"action":"insert","lines":["e"]},{"start":{"row":39,"column":55},"end":{"row":39,"column":56},"action":"insert","lines":["n"]}],[{"start":{"row":39,"column":55},"end":{"row":39,"column":56},"action":"remove","lines":["n"],"id":496},{"start":{"row":39,"column":54},"end":{"row":39,"column":55},"action":"remove","lines":["e"]},{"start":{"row":39,"column":53},"end":{"row":39,"column":54},"action":"remove","lines":["g"]}],[{"start":{"row":39,"column":53},"end":{"row":39,"column":54},"action":"insert","lines":["i"],"id":497},{"start":{"row":39,"column":54},"end":{"row":39,"column":55},"action":"insert","lines":["n"]},{"start":{"row":39,"column":55},"end":{"row":39,"column":56},"action":"insert","lines":["t"]},{"start":{"row":39,"column":56},"end":{"row":39,"column":57},"action":"insert","lines":["r"]},{"start":{"row":39,"column":57},"end":{"row":39,"column":58},"action":"insert","lines":["o"]}],[{"start":{"row":39,"column":58},"end":{"row":39,"column":59},"action":"insert","lines":["d"],"id":498},{"start":{"row":39,"column":59},"end":{"row":39,"column":60},"action":"insert","lines":["u"]},{"start":{"row":39,"column":60},"end":{"row":39,"column":61},"action":"insert","lines":["c"]},{"start":{"row":39,"column":61},"end":{"row":39,"column":62},"action":"insert","lines":["t"]},{"start":{"row":39,"column":62},"end":{"row":39,"column":63},"action":"insert","lines":["i"]},{"start":{"row":39,"column":63},"end":{"row":39,"column":64},"action":"insert","lines":["o"]}],[{"start":{"row":39,"column":64},"end":{"row":39,"column":65},"action":"insert","lines":["n"],"id":499}]]},"timestamp":1636946030075}