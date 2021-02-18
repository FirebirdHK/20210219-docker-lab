FROM python:2.7-alpine

RUN apk --no-cache add socat
RUN adduser -D firebird

WORKDIR /app
COPY --chown=root app.py /app
RUN chmod -R -w /app && chmod +x /app/app.py

USER firebird
EXPOSE 3000

ENV FLAG "flag{python_calc_demo_roo9Yi5a}"
CMD socat -d -d TCP-LISTEN:3000,reuseaddr,fork EXEC:"python -u app.py"
# CMD socat -d -d TCP-LISTEN:3000,reuseaddr,fork EXEC:"stdbuf -i0 -o0 -e0 python app.py"
