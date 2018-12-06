/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package laba2_c;
import java.util.Scanner;

/**
 *
 * @author patison5
 */
public class Laba2_C {

    /**
     * @param args the command line arguments
     */

    static double getNumber(double a, double b, double c, double x) {
        return Math.exp(Math.pow((Math.cos(b * x) + x),.5)) * Math.sin(Math.pow((a*x + 1), .5) / c);
    }
    
    public static void main(String[] args) {
        Scanner in = new Scanner(System.in);

        double a = in.nextDouble();
        double b = in.nextDouble();
        double c = in.nextDouble();
        double x = in.nextDouble();
        
        System.out.println(getNumber(a, b, c, x));
    }
}
