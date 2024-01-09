        <table class="table table-striped border-top dataTable" id="sample_1" aria-describedby="sample_1_info">
            <thead>
            <tr role="row"><th style="width: 13px;" class="sorting_disabled" role="columnheader" rowspan="1" colspan="1" aria-label="
                                  ">
                 ردیف</th>
                     <th class="sorting" role="columnheader" tabindex="0" aria-controls="sample_1" rowspan="1" colspan="1" aria-label="Username: activate to sort column ascending" style="width: 700px;">
                          محصول 
                     </th>
                     <th class="sorting" role="columnheader" tabindex="0" aria-controls="sample_1" rowspan="1" colspan="1" aria-label="Username: activate to sort column ascending" style="width: 700px;">
نام کاربر  
                     </th>
                     <th class="sorting" role="columnheader" tabindex="0" aria-controls="sample_1" rowspan="1" colspan="1" aria-label="Username: activate to sort column ascending" style="width: 700px;">
                         قیمت محصول 
                     </th>
                     <th class="sorting" role="columnheader" tabindex="0" aria-controls="sample_1" rowspan="1" colspan="1" aria-label="Username: activate to sort column ascending" style="width: 700px;">
                         توضیحات محصول 
                     </th>
                      
                    <th class="hidden-phone sorting" role="columnheader" tabindex="0" aria-controls="sample_1" rowspan="1" colspan="1" aria-label="Email: activate to sort column ascending" style="width: 100px;">

                    </th>
                    <th class="hidden-phone sorting" role="columnheader" tabindex="0" aria-controls="sample_1" rowspan="1" colspan="1" aria-label="Points: activate to sort column ascending" style="width: 100px;">

                    </th>
                    <th class="hidden-phone sorting" role="columnheader" tabindex="0" aria-controls="sample_1" rowspan="1" colspan="1" aria-label="Joined: activate to sort column ascending" style="width: 100px;">

                    </th>
            </tr>
            </thead>
            <tbody>
            <?php 
           
            foreach ($result as $key=>$value):
             $pro=new pro();
             $product=$pro->pro_detail($value['pro_id']);
             $user=new user();
             $user_name=$user->user_name($value['user_id']);

            ?>
            <tr class="gradeX even">
                <td class=" "><?php echo $key+1; ?></td>
                <td class=" "><?php echo $product['title']; ?></td>
                <td class=" "><?php echo $user_name['name']; ?></td>  
                <td class=" "><?php echo $product['text']; ?></td>
                <td class=" "><?php echo number_format($product['price']); ?></td>     
                
            </tr>
            <?php endforeach;?>
            </tbody>
        </table>
    




