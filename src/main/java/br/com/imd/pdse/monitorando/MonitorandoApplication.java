package br.com.imd.pdse.monitorando;

import org.springframework.boot.SpringApplication;
import org.springframework.boot.autoconfigure.SpringBootApplication;
import org.springframework.boot.autoconfigure.jdbc.DataSourceAutoConfiguration;

@SpringBootApplication
public class MonitorandoApplication {

	public static void main(String[] args) {
		SpringApplication.run(MonitorandoApplication.class, args);
	}

}
