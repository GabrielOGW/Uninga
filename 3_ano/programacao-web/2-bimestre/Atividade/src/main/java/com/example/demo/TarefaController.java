package com.example.demo;

import org.springframework.web.bind.annotation.*;

import java.util.ArrayList;
import java.util.List;

@RestController
public class TarefaController {

    private List<Tarefa> tarefas = new ArrayList<>();
    private int proximoId = 0;

    @PostMapping("/tarefas")
    public Tarefa adicionarTarefa(@RequestBody Tarefa tarefa) {
        tarefa.setId(proximoId);
        tarefas.add(tarefa);
        return tarefa;
    }

    @GetMapping("/tarefas")
    public List<Tarefa> listarTarefas() {
        return tarefas;
    }

    @DeleteMapping("/tarefas/{id}")
    public void excluirTarefa(@PathVariable("id") int id) {
        tarefas.removeIf(tarefa -> tarefa.getId() == id);
    }

    @PatchMapping("/tarefas/{id}")
    public Tarefa atualizarTarefa(@PathVariable("id") int id, @RequestBody Tarefa tarefaAtualizada) {
        for (Tarefa tarefa : tarefas) {
            if (tarefa.getId() == id) {
                tarefa.setDescricao(tarefaAtualizada.getDescricao());
                tarefa.setConcluida(tarefaAtualizada.isConcluida());
                return tarefa;
            }
        }
        return null;
    }
}
