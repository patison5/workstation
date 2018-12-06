/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package laba1_c;

/**
 *
 * @author patison5
 */


public class Laba1_C {

    /**
     * @param args the command line arguments
     */
    static int sum(int a, int x) {
        return a + x;
    }
    
    public static void main(String[] args) {
        int a = Integer.parseInt(args[0]),
            b = Integer.parseInt(args[1]);
        
        System.out.println(sum(a,b));
    }
    
}
