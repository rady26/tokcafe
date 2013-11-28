<?php
/**************************************************************************//**
    @file		CheckUtility.php
    @brief		チェックユーティリティー
    @par		[説明]


    @date		2012-10-12
    @author		Marcio Kitagaki
    @note
*//***************************************************************************/

require_once "mb_string_util.inc";

class CheckUtility
{
    /**
    * Constructor
    *
    * @access private
    */
    private function __Construct()
    {
    // 外部からのインスタンス生成を禁止
    // Ban the create instance from outside
    }

    /// <summary>
    ///	アラート
    //  Alert
    /// javascriptのalertを実行
    /// run the javascript alert
    /// </summary>
    static public function Alert( $str ){
            $code = '<script type="text/javascript">';
            $code .= "alert( '$str' );";
            $code .= "</script>";
            echo $code;
    }

    /// <summary>
    ///	必須チェック
    /// Check required fields
    /// </summary>
    static public function Required($data) {
        //全角スペースを半角スペースに変換する
        $data = mb_convert_kana($data, "s");
    	return strlen(trim($data));
    }

    /// <summary>
    ///	文字数チェック
    /// Check number of characters
    /// </summary>
    static public function MiMmaxCheck($value, $max, $encode="UTF-8") {
        //スペースの場合はそのままリターン
        if (!strlen($value)) {
            return true;
        }

        // 文字列を１文字ずつ配列に入れる
        $char_arr = array();
        for ($i=0; $i<mb_strlen($value, $encode); $i++) {
            $char_arr[] = mb_substr($value, $i, 1, $encode);
        }
        $zen_total = 0;
        $han_total = 0;
        foreach($char_arr as $char) {
            if (strlen( $char) == mb_strlen($char, $encode)) {
                $han_total++;
            } else {
                $zen_total++;
            }
        }
        $char_total = $zen_total + ((int)($han_total/2) + $han_total%2);


        return ($char_total >(int)$max) ? false : true;
    }

    /// <summary>
    ///	数字範囲チェック
    /// Check number range
    /// </summary>
    static public function RangeCheck($data, $min, $max) {
        if (!strlen(trim($data))) {
            return true;            //スペースはＯＫ
        }

        if (!is_numeric($data)) {
            return false;
        }

        if ( intval($data) < $min || intval($data) > $max ) {
            return false;
        } else {
            return true;
        }
    }

    /// <summary>
    ///	半角数字チェック
    /// Check Halfwidth numbers
    /// </summary>
    static public function IsHalfwidthNum($data) {
        $pat = "^[0-9]*$";
        if (ereg($pat, trim($data))) {
            return true;
        } else {
            return false;
        }
    }

    /// <summary>
    ///	半角英字チェック
    /// Check alphabetic characters
    /// </summary>
    static public function IsHalfwidthEnglish($data) {
        //magic_quotes_gpcがONの時は、エスケープを解除する
        if (get_magic_quotes_gpc()) {
            $data = stripslashes($data);
        }

        $pat = "^[a-zA-Z\']+$";
        if (ereg($pat, trim($data))) {
            return true;
        } else {
            return false;
        }
    }

    /// <summary>
    ///	半角チェック
    /// Check Halfwidth
    /// </summary>
    static public function HalfwidthCheck($data) {
        //magic_quotes_gpcがONの時は、エスケープを解除する
        if (get_magic_quotes_gpc()) {
            $data = stripslashes($data);
        }

        if (strlen($data) == mb_strlen($data)) {
            return true;
        } else {
            return false;
        }
    }

    /// <summary>
    ///	全角チェック
    /// Check Fullwidth
    /// </summary>
    static public function FullwidthCheck($data) {
        //magic_quotes_gpcがONの時は、エスケープを解除する
        if (get_magic_quotes_gpc()) {
            $data = stripslashes($data);
        }

        if (strlen($data) == mb_strlen($data) * 2) {
            return true;
        } else {
            return false;
        }
    }

    /// <summary>
    ///	全角カタカナチェック
    ///
    /// </summary>
    static public function IsFullwidthKkana($data) {
    	mb_regex_encoding("UTF-8");

        //magic_quotes_gpcがONの時は、エスケープを解除する
        if (get_magic_quotes_gpc()) {
            $data = stripslashes($data);
        }

        $data= mb_trim(trim($data));
        $pat = "^[ァ-ヶ？゛゜ゝゞー・]+$";
        if (mb_ereg_match($pat, $data)) {
            return true;
        } else {
            return false;
        }
    }

    /// <summary>
    ///	半角カタカナチェック
    /// </summary>
    static public function IsHalfwidthKkana($data) {
    	mb_regex_encoding("UTF-8");

        //magic_quotes_gpcがONの時は、エスケープを解除する
        if (get_magic_quotes_gpc()) {
            $data = stripslashes($data);
        }

        $data= mb_trim(trim($data));
        $pat = '^[ｦ-ﾟ]+$';
        if (mb_ereg_match($pat, $data)) {
            return true;
        } else {
            return false;
        }
    }

    /// <summary>
    ///	全角ひらがなチェック
    /// </summary>
    static public function IsFullwidthHkana($data) {
        //magic_quotes_gpcがONの時は、エスケープを解除する
        if (get_magic_quotes_gpc()) {
            $data = stripslashes($data);
        }

        $data= mb_trim(trim($data));
        $pat = "^[ぁ-ん?゛゜ゝゞー・]+$";
        if (mb_ereg_match($pat, $data)) {
            return true;
        } else {
            return false;
        }
    }

    /// <summary>
    ///	禁止文字チェック
    /// Check prohibited characters
    /// </summary>
    static public function NGCharCheck($data) {
        if (!strlen(trim($data))) {
            return true;        //スペースは対象外
        }

        if (ereg("[<>\"\'&]", $data)) {
            return false;
        } else {
            return true;
        }
    }

    /// <summary>
    ///	パターンチェック
    ///
    /// </summary>
    static public function PatternCheck($data, $ptn) {
        if (!strlen(trim($data))) {
            return true;        //スペースは対象外
        }
        if (!ereg($ptn, $data)) {
            return false;
        } else {
            return true;
        }
    }

    /// <summary>
    ///	メールアドレスチェック
    ///
    /// </summary>
    static public function MailaddressCheck($value) {
        //スペースの場合はそのままリターン
        if (!strlen($value)) {
            return true;
        }
        //全角文字→半角文字
        $value = mb_convert_kana($value, "askh");

        if (!preg_match("/^[\w\-\.]+@[a-zA-Z0-9\-]+(\.[a-zA-Z0-9\-]+)*\.[a-zA-Z]{2,4}$/", $value)) {
           return false;
        } else {
            return true;
        }
    }

    /// <summary>
    ///	ドメインチェック
    /// </summary>
    static public function DomainCheck($value) {
        //スペースの場合はそのままリターン
        if (!strlen($value)) {
            return "";
        }
        //全角文字→半角文字
        $value = mb_convert_kana($value, "askh");

        //ドメイン名の取得
        $pos = strpos($value, "@");
        $domain = substr($value, $pos+1);
        //MXレコードチェック
        if (checkdnsrr($domain, "MX")) {
            return true;
        }
        //Aレコードチェック
        if (checkdnsrr($domain, "A")) {
            return true;
        }
        //ホストの別名チェック
        if (checkdnsrr($domain, "CNAME")) {
            return true;
        }
        return false;
    }

    /// <summary>
    ///	URLチェック
    /// </summary>
    static public function UrlCheck($value) {
        //スペースの場合はそのままリターン
        if (!strlen($value)) {
            return true;
        }
        //全角文字→半角文字
        $value = mb_convert_kana($value, "askh");

        if (preg_match("/^https?:\/\/[\-_\.\/~,$!*'();:@=&\+%A-Za-z0-9]+$/", $value)) {
            return true;
        } else {
            return false;
        }
    }


    /// <summary>
    ///	日付チェック
    /// </summary>
    static public function DateCheck($month, $day, $year) {

        if (!strlen($month) || !strlen($day) || !strlen($year) ) {
            return false;
        }

    	return checkdate($month, $day, $year);

    }

    static public function Counter($filename,$sprintf = 1){
      //ファイルがなかったら作成する
      if (!file_exists($filename)) {
        touch( $filename );
        chmod( $filename, 0777 );
      }
      $fp = @fopen($filename,"r+") or die("ファイルが開けません");
      flock($fp, LOCK_EX);
      $count = fgets($fp, 64);

      if( (int)$count === 0 ){
        //ファイルがない場合のデフォルトは１
        $count = 1;
      }else{
        //数値が取得できたら連番をつける
        $count++;
      }
      rewind($fp);
      fputs($fp, $count);
      fclose($fp);
      return sprintf('%0'.$sprintf.'d', $count);
    }
}

?>