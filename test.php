<?php

/*
  现在本地工作区的代码已经发生改变了
这时候假设我都改完了，进行再次提交
1、git   add . 将修改的内容放入到缓存区
2、git   commit -m  注释   git每次提交的注释
3、git   push  推送内容


*/
function   demo(){

    echo    phpinfo();
}


demo();


/*
 * 这是在tmp分支写的代码
 * 目前在tmp分支上，我要切到master分支了  你注意看下   test这个方法在master 有没有  *****
 *  现在你的代码
 *
 */

function   test(){
    echo   "This   is   tmp  branch ";
}


test();