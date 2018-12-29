/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package practica_3;

/**
 *
 * @author patison5
 */
public class Functions {
    Console console = new Console();


    public String moveLeft (String numb) {
        String result = "";
        
        for (int i = 1; i < numb.length(); i++)
            result = result + numb.charAt(i);
        
        result = result + "0";
        return result;
    }
    
    public String moveRight (String numb) {
        String result = "0";
        
        for (int i = 0; i < numb.length() - 1; i++)
            result = result + numb.charAt(i);
        
        return result;
    }
    

    // получаем двоичное по десячичному
    public String getByteCode(String numb) {
        String result = "";     
        int number = Integer.parseInt(numb);
        
        if (number == 0) result = "0";
        else {
            while (number != 0) {
                result = number % 2 + result;
                number = number / 2;
            }   
        }
        
        return result;
    }
    
    // получаем десятичное по двоичному (строка)
    public String getNumberByByteCode (String numb) {
        int res = 0;

        for (int i = numb.length() - 1; i >= 0; i--)
            res = res + (numb.charAt(i) == '1' ? 1 : 0) * (int)(Math.pow(2, (numb.length() - 1) - i));
        
        return res+"";
    }

    public String getNumberByByteCode (String numb, boolean sign) {
        if (sign) 
            return getNumberByByteCode(numb);
        else {
            return "a";
        }
    }


    // получаем из 2 16 чистов
    public String getHex(String number) {
        String str = number;
        String arr [] = {"0","1","2","3","4","5","6","7","8","9","A","B","C","D","E","F"};

        if (str.length() <= 16) {
            for (int i = 0; i < (16 - str.length()); i++)
                number = "0" + number;

            str = "";

            for (int i = 0; i < number.length(); i+=4) 
                str = str + arr[Integer.parseInt(getNumberByByteCode(number.substring(i, i+4)))]; 

            return str;
        } else {
            return "fuck u, Vitalya!";
        }
        
    }

    // получаем десятичное из двоичног
    public int bin2dec (String str) {
        int res = 0;
        
        for (int i = str.length() - 1; i >= 0; i--) 
            res += Math.pow(2, str.length() - i - 1) * (str.charAt(i) == '1' ? 1 : 0);
            
        return res;
    }

    // подуаем дополнительный код из десятичного
    public String getAdditionalByteCode(String str) {
        String res = "";
        int n = 8;
        int temp[] = {0,0,0,0,0,0,0,0};
        
        //прямой код
        for (int i = 0; i < str.length(); i++)
            temp[n-i-1] = str.charAt(str.length() - i - 1) - 48;
        //System.out.print("осн: ");console.log(temp);
        
        
        
        //обратный код
        for (int i = 0; i < n; i++)
            temp[i] = (temp[i] == 1 ? 0 : 1);
        //System.out.print("обр: ");console.log(temp);
        
        
        
        //дополнительный код
        for (int i = n-1; i >= 0; i--) {
            temp[i] = (temp[i] + 1) % 2;
            
            if (temp[i] != 0) break;
        }
        //System.out.print("доп: ");console.log(temp);
       
        for (int i = 0; i < n; i++)
            res = res + temp[i];

        return res;
    }
}