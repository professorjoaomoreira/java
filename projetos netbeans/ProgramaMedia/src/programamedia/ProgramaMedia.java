/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package programamedia;

import java.util.Scanner;

/**
 *
 * @author joao
 */
public class ProgramaMedia {

    /**
     * @param args the command line arguments
     */
    public static void main(String[] args) {
        // TODO code application logic here
        
        Scanner teclado = new Scanner(System.in); 
        System.out.println("Digite aqui a primeira nota: ");
        Float n1 = teclado.nextFloat();
        System.out.println("Digite aqui a segunda nota: ");
        Float n2 = teclado.nextFloat();
        Float m = (n1+n2)/2;
        System.out.println("Sua media foi " + m);
        if (m>9){
        System.out.println("Parabens, pequeno gafanhoto");
    }
  }
}
