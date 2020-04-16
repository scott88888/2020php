<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php
// class Hero {
//     public $name;          // 角色的名稱
//     public $stats_hp;      // 角色生命力數值
//     public $stats_mp;      // 角色法力數值
//     public $stats_atk;     // 角色攻擊力數值
//     public $stats_def;     // 角色防禦力數值
//     public $skill_1;       // 角色第一招技能
//     public $skill_2;       // 角色第二招技能
//     public $skill_3;       // 角色第三招技能
//     public $skill_4;       // 角色第四招技能
//     public $article;       // 角色玩法文章
// }
class Stats {
    public $hp;  // 生命值
    public $mp;  // 法力值
    public $atk; // 攻擊力
    public $def; // 防禦力
    public function __construct($sourceHp, $sourceMp,$sourceAtk, $sourceDef){
    $this->hp = $sourceHp; // 組裝時，把 生命力數值 傳進物件內
    $this->mp = $sourceMp; // 組裝時，把 法力數值 傳進物件內
    $this->atk = $sourceAtk; // 組裝時，把 攻擊力數值 傳進物件內
    $this->def = $sourceDef; // 組裝時，把 防禦力數值 傳進物件內
    }
 }
 class Skill {
    public $name;        // 技能名稱
    public $description; // 技能描述
    function __construct($sourceName, $sourceDescription){
    $this->name = $sourceName;
    $this->description = $sourceDescription;
    }
 }
 class Hero {
    public $name;    // 預備裝 角色名稱字串變數
    public $stats;   // 準備裝『數值物件』的變數
    public $skills;  // 準備裝『技能物件』的陣列變數
    public $article; // 預備來裝 教學文章 變數
    function __construct($sourceName, $sourceStats, $sourceSkills, $sourceArticle){
     $this->name = $sourceName;
     $this->stats = $sourceStats;
     $this->skills = $sourceSkills;
     $this->article = $sourceArticle;
    }
 }
 // 使用的方法是這樣
 $sourceStats = new Stats(100, 80, 40, 20);
 $sourceSkills[] = new Skill("獵手","...說明略...");
 $sourceSkills[] = new Skill("血腥獵殺","...說明略...");
 $sourceSkills[] = new Skill("送葬詛咒","...說明略...");
 $sourceSkills[] = new Skill("水銀彈幕","...說明略...");
 $sourceArticle = "文章";
 $hero = new Hero("凡恩",$sourceStats, $sourceSkills, $sourceArticle);
 // 這樣就得到 一隻凡恩英雄物件(object)了，
 // 亦可以這樣取出資料
 echo $hero->stats->hp."\n";
 echo $hero->stats->atk."\n";
 echo $hero->skills[0]->name."\n";
 echo $hero->article."\n";


?>


</body>
</html>