
        <form action="index.php?c=procat&a=edit&id=<?php echo $results['id']; ?>" method="post" class="form-horizontal tasi-form">
            <div class="form-group">
                <label class="col-sm-2 control-label">عنوان دسته بندی</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="frm[title]" value="<?php echo $results['title']; ?>">
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-2 control-label">سرگروه</label>
                <div class="col-sm-10">
                    <select class="form-control input-lg m-bot15" name="frm[chid]">
                        <option value="0">سرگروه</option>
                        <?php foreach ($res as $val): ?>
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
                   <a href="index.php?c=procat&a=list"><p class="btn btn-xs btn-success" style="margin-top:50px" >بازگشت به لیست  </p></a>
                </div>
            </div>
        </form>
   




