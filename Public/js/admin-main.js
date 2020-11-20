function displayProduct(products,wrapper,paging,row_per_page,page) {
    wrapper.html("");
    var product_element = "";
    let pageCr = page-1;
    if(products) {
        let start = row_per_page * pageCr;

        let end = start + row_per_page;
        console.log(start,end);
        let paginatedProducts = products.slice(start,end);
        let stt = (page == 1) ? 1 : ((page-1)*row_per_page+1);
        let totalPage = Math.floor((products.length+1)/row_per_page);
        var pagination = "";
        for(let i = 0; i < paginatedProducts.length; i++) {
            let product = paginatedProducts[i];
            
            product_element +=
            '                       <tr>  '  + 
            '                           <th>'+stt+'</th>  '  + 
            '                           <td class="m-t-5 text-truncate" style="width: 374px; max-width: 374px;">'+product.productname+'</td>  '  + 
            '                           <td style="width: 50px; height: 50px;">  '  + 
            '                                 '  + 
            '                                 <img class="img-thumbnail mx-auto d-block "  style="width: 50px; height: 50px;" src="../Uploads/'+product.avatar+'" alt="image">  '  + 
            '                                 '  + 
            '                           </td>  '  + 
            '                           <td>'+product.categoryname+'</td>  '  + 
            '                           <td>'+product.subcategoryname+'</td>  '  + 
            '                           <td>'+convertFormatPrice(product.productprice)+'</td>  '  + 
            '                           <td>  '  + 
            '                               <a target="_blank" href="?page=product-detail&id='+product.productID+'"><span class="btn btn-secondary"><i class="fas fa-info-circle fs-20"></i></span></a>  '  + 
            '                               <a href="?page=product-edit&id='+product.productID+'"><span class="btn btn-primary"><i class="fas fa-edit fs-20"></i></span></a>  '  + 
            '                               <a href="" onclick="return checkDelete();"><span class="btn btn-danger"><i class="fas fa-ban fs-20"></i></span></a>  '  + 
            '                           </td>  '  + 
            '                       </tr>  ';
            stt++;
        }

        pagination += '<ul class="pagination justify-content-center text-center">';
                   
           if (page > 1 && totalPage > 1){
               pagination += '<li class="page-item"><a class="page-link text-dark h-100" onclick="showResult($(\'#search-product\').val(),'+(page-1)+')"><i class="fas fa-chevron-left"></i></a></li>';
           }
           else {
               pagination += '<li class="page-item disabled"><a class="page-link text-secondary h-100 "  href=""><i class="fas fa-chevron-left"></i></a></li>';
           }
   
           for (let i = 1; i <= totalPage; i++){
               if (i == page){
                   pagination += '<li style="width: 35px;" class="page-link bg-dark text-white" href="javascript:void(0)">'+i+'</li>';
               }
               else{
                   pagination += '<li style="width: 35px;" class="page-item "><a class="page-link text-dark" onclick="showResult($(\'#search-product\').val(),'+i+')" href="javascript:void(0);">'+i+'</a></li>';
                   }
           }
   
           if (page < totalPage && totalPage > 1){
               pagination += '<li class="page-item"><a class="page-link  h-100 text-dark" onclick="showResult($(\'#search-product\').val(),'+(page+1)+')"  href="javascript:void(0);"><i class="fas fa-chevron-right"></i></a></li></ul>';
           }
           else {
               pagination += '<li class="page-item disabled"><a class="page-link text-secondary h-100" ><i class="fas fa-chevron-right"></i></a></li></ul>';
           }
    }
    else {
        product_element += "<tr><td colspan='7'><b>Không có sản phẩm tương ứng!</b></td></tr>"
    }
   
        

        wrapper.html(product_element);
        paging.html(pagination);
}

function convertFormatPrice(number) {
    return  new Intl.NumberFormat('vi', {
       style: 'currency',
       currency: 'VND'
       }).format(number);
    }