// JScript �ļ�
//checkdate���ж�����,���� 2002-02-09 


function checkdate(inputyear,inputmonth,inputday) 
{ 
//alert("ddsss");
    var flag=true;  
    //getdate=fob(inpar).value; 
    var year=inputyear;
    var month=inputmonth; 
    var day=inputday; 


    flag=true; 
    if (inputyear==0||inputmonth==0||inputday==0)
        return false;
    if (month==4 || month==6 || month==9 || month==11) // 4,6,9,11�·����ڲ��ܳ���30 
    {  
        if (day>30){
            flag=false; 
        } 
        else{
            flag = true;
        }
    } 
    if (month==2)  // �ж�2�·� 
    { 
        if (LeapYear(year)) 
        { 
            if (day>29 || day<1){ flag=false; } 
        } 
        else 
        { 
            if (day>28 || day<1){flag=false; } 
        } 
    } 
    return flag;
} 

//�ж��Ƿ����� 
//����      intYear ������ݵ�ֵ 
//return   true: ������   false: �������� 
function LeapYear(intYear) { 
   if (intYear % 100 == 0) { 
      if (intYear % 400 == 0) { return true; } 
   } 
   else { 
      if ((intYear % 4) == 0) { return true; } 
   } 
   return false; 
}
