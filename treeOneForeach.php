//в данном алгоритме дерево строиться всего за один проход цикла без рекурсий и вложенных циклов, 
//расплата за это - память, приходиться вести два массива одновременно, дерево строиться как сортированное так и нет,
//в принципе возможна любая вложенность дерева
private function createTree($array)
    {
        $treeNodes = [];
        $node = [];
        foreach($array as $key=>$value)
        {
            if(isset($node[$value['id']])){
                //значит уже есть предок, пишем так
                $node[$value['id']]['node'] = $value;
            }else{
                $node[$value['id']]['node'] = $value;
                if($value['parent_id']==0){
                    $treeNodes['children'][] = &$node[$value['id']];
                }
            }
            if($value['parent_id'] != 0){
                $node[$value['parent_id']]['children'][] = &$node[$value['id']];
            }
        }
        return $treeNodes['children'];
    }
