/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package lab2_a;

/**
 *
 * @author patison5
 */
public class Lab2_A {
    static double getNumber(double a, double b, double c, double x) {
        return Math.exp(Math.pow((Math.cos(b * x) + x),.5)) * Math.sin(Math.pow((a*x + 1), .5) / c);
    }
    
    public static void main(String[] args) {
        System.out.println(getNumber(2.13, 4.7, 2.6, 1.2));
    }
    
}
