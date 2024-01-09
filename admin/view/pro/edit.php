
        <form action="index.php?c=pro&a=edit&id=<?php echo $results['id']; ?>" method="post" class="form-horizontal tasi-form">
            <div class="form-group">
                <label class="col-sm-2 control-label">عنوان دسته بندی</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="frm[title]" value="<?php echo $results['title']; ?>">
                </div>
                <label class="col-sm-2 control-label"> توضیحات  دسته بندی</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="frm[text]" value="<?php echo $results['text']; ?>">
                </div>
                <label class="col-sm-2 control-label">عکس دسته بندی</label>
                <div class="col-sm-10">
                    <input type="file" class="form-control" name="frm[image]" value="<?php echo $results['image']; ?>">
                </div>
                
            
                
                
                <label class="col-sm-2 control-label">قیمت  دسته بندی</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="frm[price]" value="<?php echo $results['price']; ?>">
                </div>
                <label class="col-sm-2 control-label">تعداد دسته بندی</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="frm[count]" value="<?php echo $results['count']; ?>">
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-2 control-label">گروه</label>
                <div class="col-sm-10">
                    <select class="form-control input-lg m-bot15" name="frm[chid]">
                        <option value="0">سرگروه</option>
                        <?php 
                      	    require_once 'model/Mprocat.php';
                      	    $class = new procat();
                      	    $res=$class->promaincat_list();
                            foreach ($res as $val): ?>
                            <option value="<?php echo $val['id'] ?>"><?php echo $val['title'] ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-8">
                    <input type="submit" value="ویرایش" class="btn btn-xs btn-success" />
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-8">
                   <a href="index.php?c=pro&a=list"><p class="btn btn-xs btn-success" style="margin-top:50px" >بازگشت به لیست  </p></a>
                </div>
            </div>
        </form>







