/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package programaidadejava;

import java.util.Scanner;

/**
 *
 * @author joao
 */
public class ProgramaIdadeJava {

    /**
     * @param args the command line arguments
     */
    public static void main(String[] args) {
        // TODO code application logic here
        Scanner teclado = new Scanner(System.in);
        System.out.print("Em que ano voce nasceu ? ");
        int nasc = teclado.nextInt();
        int idade = 2015 - nasc;
        System.out.println("Sua idade eh: "+ idade);
        if (idade>=18) {
        System.out.println("Voce eh de maior :");
    } else {
        System.out.println("voce eh de menor");
         
        }
    }
}