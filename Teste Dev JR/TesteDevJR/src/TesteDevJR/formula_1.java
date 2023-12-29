package TesteDevJR;

import java.util.ArrayList;
import java.util.Collections;
import java.util.Comparator;
import java.util.Random;

public class formula_1 {
    public static void main(String[] args) {
        String[] nomesPilotos = {
        		// Nomes dos Pilotos
                "Hamilton", "Verstappen", "Bottas", "Leclerc", "Ricciardo", "Norris", "Perez", "Sainz", "Gasly", "Alonso",
                "Vettel", "Ocon", "Stroll", "Raikkonen", "Tsunoda", "Giovinazzi", "Russell", "Latifi", "Schumacher", "Mazepin",
                "Button", "Rosberg", "Webber", "Massa", "Räikkönen"
        };

        int totalPilotos = 25; // 25 Pilotos
        int totalGrandesPremios = 17; // 17 Grandes Premios

        ArrayList<Integer> posicoes = new ArrayList<>();
        // Preenchendo a lista de posições dos pilotos de 1 a 25
        for (int i = 1; i <= totalPilotos; i++) {
            posicoes.add(i);
        }

        Random random = new Random();
        
        // Sistema de pontuações em cada Grande Premio
        System.out.println("----- Pontuações por Grande Prêmio -----");
        System.out.println("Grande Prêmio\tSistema Antigo\t\tSistema Novo");

        int[][] pontosAntigos = new int[totalPilotos][totalGrandesPremios];
        int[][] pontosNovos = new int[totalPilotos][totalGrandesPremios];
        
        // Simulando o sistema de pontuação antigo em cada grande premio
        for (int i = 0; i < totalGrandesPremios; i++) {
            Collections.shuffle(posicoes, random); // Embaralhando as posições dos pilotos

            for (int j = 0; j < totalPilotos; j++) {
                int pontosAntigo = calcularPontosSistemaAntigo(j); // Calculando os pontos para cada piloto no sistema antigo
                int pontosNovo = calcularPontosSistemaNovo(j); // Calculando os pontos para cada piloto no sistema novo

                pontosAntigos[posicoes.get(j) - 1][i] = pontosAntigo;
                pontosNovos[posicoes.get(j) - 1][i] = pontosNovo;
            }
        }

        for (int i = 0; i < totalGrandesPremios; i++) {
            System.out.print("GP" + (i + 1) + "\t\t\t");

            for (int j = 0; j < totalPilotos; j++) {
                System.out.print(pontosAntigos[j][i] + "\t\t\t" + pontosNovos[j][i] + "\t\t\t");
            }
            System.out.println();
        }
        // Calculando a posição geral de cada piloto ao final dos 17 grandes premios
        System.out.println("\n----- Pontuação Geral de Cada Piloto -----");
        System.out.println("Piloto\t\tPontuação Sistema Antigo\tPontuação Sistema Novo");

        ArrayList<Piloto> pilotosAntigos = calcularPontuacaoGeral(pontosAntigos, nomesPilotos); // Calculando os pontos  gerais para cada piloto no sistema antigo
        ArrayList<Piloto> pilotosNovos = calcularPontuacaoGeral(pontosNovos, nomesPilotos); // Calculando os pontos  gerais para cada piloto no sistema novo

        for (int i = 0; i < totalPilotos; i++) {
            System.out.println(pilotosAntigos.get(i).getNome() + "\t\t" +
                    pilotosAntigos.get(i).getPontuacaoTotal() + "\t\t\t\t\t" +
                    pilotosNovos.get(i).getPontuacaoTotal());
        }
    }

    private static ArrayList<Piloto> calcularPontuacaoGeral(int[][] pontos, String[] nomesPilotos) {
    	// Colocando os pilotos por ordem de pontuação.
        ArrayList<Piloto> pilotos = new ArrayList<>();
        for (int i = 0; i < pontos.length; i++) {
            int pontuacaoTotal = 0;
            for (int j = 0; j < pontos[i].length; j++) {
                pontuacaoTotal += pontos[i][j];
            }
            pilotos.add(new Piloto(nomesPilotos[i], pontuacaoTotal));
        }
        pilotos.sort(Comparator.comparingInt(Piloto::getPontuacaoTotal).reversed());
        return pilotos;
    }

    private static int calcularPontosSistemaAntigo(int posicao) {
        switch (posicao) {
            case 0: return 10;
            case 1: return 8;
            case 2: return 6;
            case 3: return 5;
            case 4: return 4;
            case 5: return 3;
            case 6: return 2;
            case 7: return 1;
            default: return 0;
        }
    }

    private static int calcularPontosSistemaNovo(int posicao) {
        switch (posicao) {
            case 0: return 25;
            case 1: return 18;
            case 2: return 15;
            case 3: return 12;
            case 4: return 10;
            case 5: return 8;
            case 6: return 6;
            case 7: return 4;
            case 8: return 2;
            case 9: return 1;
            default: return 0;
        }
    }

    static class Piloto {
        private String nome;
        private int pontuacaoTotal;

        Piloto(String nome, int pontuacaoTotal) {
            this.nome = nome;
            this.pontuacaoTotal = pontuacaoTotal;
        }

        String getNome() {
            return nome;
        }

        int getPontuacaoTotal() {
            return pontuacaoTotal;
        }
    }

}
