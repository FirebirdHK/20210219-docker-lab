FROM gcc:10 as builder
WORKDIR /src
COPY src/ /src
RUN gcc -o login1 login1.c



FROM ubuntu:18.04
WORKDIR /app

RUN useradd --no-create-home firebird
RUN apt-get update && \
    apt-get install -y nmap socat && \
    apt-get clean && \
    rm -rf /var/lib/apt/lists/*

COPY --from=builder --chown=root /src/login1 /app/
RUN chmod -R -w /app && chmod +x /app/login1

USER firebird

EXPOSE 3000
CMD socat -d -d TCP-LISTEN:3000,reuseaddr,fork EXEC:"stdbuf -i0 -o0 -e0 /app/login1"
