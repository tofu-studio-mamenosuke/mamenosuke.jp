<?php	include dirname(__FILE__) . "/../head.php";?>

<body>
    <div class="grid-Information">
    	<div class="g-item-Information upload">
    	    <h3 class="upload">データベース編集</h3>
            <form onSubmit="return false;" method="POST" action="confirm.php">
              <table class="about-table upload">
                <tr>
                  <th>商品ID</th>
                  <td><input type="text" name="p_id" size="30"></td>
                </tr>
                <tr>
                  <th>商品名</th>
                  <td><input type="text" name="name" size="30"></td>
                </tr>
                <tr>
                  <th>画像名</th>
                  <td><input type="text" name="img_name" size="30"></td>
                </tr>
                <tr>
                  <th>価格</th>
                  <td><input type="text" name="price" size="30"></td>
                </tr>
                <tr>
                  <th>表示</th>
                  <td>
                  <input type="radio" name="showhide" value="表示" checked>表示
                  <input type="radio" name="showhide" value="非表示">非表示</td>
                </tr>
                <tr>
                  <th>ショップの表示</th>
                  <td>
                  <input type="radio" name="shopshow" value="表示" checked>表示
                  <input type="radio" name="shopshow" value="非表示">非表示</td>
                </tr>
                <tr>
                  <th>季節</th>
                  <td>
                  <input type="checkbox" name="season[]" value="春">春<br />
                  <input type="checkbox" name="season[]" value="夏">夏
                  <input type="checkbox" name="season[]" value="秋">秋
                  <input type="checkbox" name="season[]" value="冬">冬</td>
                </td>
                </tr>
                <tr>
                  <th>最大注文数</th>
                  <td><input type="radio" name="max_num_order" size="30"></td>
                </tr>
                <tr>
                  <th>大カテゴリ</th>
                  <td><input type="text" name="cate_1" size="30"></td>
                </tr>
                <tr>
                  <th>中カテゴリ</th>
                  <td><input type="text" name="cate_2" size="30"></td>
                </tr>
                <tr>
                  <th>小カテゴリ</th>
                  <td><input type="text" name="cate_3" size="30"></td>
                </tr>
                <tr>
                  <th>商品説明</th>
                  <td>
                  <textarea rows="5" cols="30" name="pdt_dsc"></textarea>
                  </td>
                </tr>
                <tr>
                  <th>簡易説明</th>
                  <td>
                  <textarea rows="5" cols="30" name="pdt_dsc_s"></textarea>
                  </td>
                </tr>
                <tr>
                  <th>原材料</th>
                  <td>
                  <textarea rows="5" cols="30" name="material"></textarea>
                  </td>
                </tr>
                <tr>
                  <th>内容量</th>
                  <td><input type="text" name="weight" size="30"></td>
                </tr>
                <tr>
                  <th>消費期限</th>
                  <td><input type="text" name="use_by" size="30"></td>
                </tr>
                <tr>
                  <th>保存方法</th>
                  <td><input type="text" name="keep" size="30"></td>
                </tr>
                <tr>
                  <th></th>
                  <td><input type="button" value="確認する" onClick="submit();"></td>
                </tr>
              </table>
            </form>
        </div>
    </div>
</body>
</html>