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


public class Practica_3 {

    /**
     * @param args the command line arguments
     */
    public static void main(String[] args) {
        // TODO code application logic here
        
        int a = 128;
        byte b = (byte) a;
        String c = "1101";
        byte[] btxt = null;
        btxt = c.getBytes();
        
        System.out.println(~a);
        System.out.println("прямой: " + Integer.toBinaryString((int) a));
        System.out.println("обратный: " + Integer.toBinaryString((int) ~a));    
        System.out.println(Integer.toString(b, 2));
        System.out.println(Integer.toString(~b, 2));
        
        System.out.println(Integer.toString(b ,2));
        System.out.println(btxt);
        
        for (int i = 0; i < btxt.length; i++) {
            System.out.println(btxt[i] - 48);
        }
    }
    
}
