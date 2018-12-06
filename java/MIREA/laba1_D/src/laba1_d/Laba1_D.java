/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package laba1_d;

/**
 *
 * @author patison5
 */
public class Laba1_D {

    /**
     * @param args the command line arguments
     */
    
    public  static String a = "значение глобальной константы метода";
    private static String b = "значение локальной константы метода";
    
    
    public static void main(String[] args) {
        final String B = "значение локальной константы метода";
        String C = "значение локальной переменной метода";
        
        System.out.println(a);
        System.out.println(b);
        System.out.println(B);
        System.out.println(C);
    }
    
}
